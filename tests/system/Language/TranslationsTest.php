<?php
namespace CodeIgniter\Language;

use PHPUnit\Framework\TestCase;

class TranslationsTest extends TestCase
{

	public function setUp()
	{
		$this->expected = $this->expectedSets();
	}

	/**
	 * Identify all the locales in the translations repo.
	 * 
	 * @return [][]
	 */
	public function translations()
	{
		$dir = getcwd() . '/Language/';
		$dh = opendir($dir);
		$sets = [];
		while (($file = readdir($dh)) !== false)
		{
			if (substr($file, 0, 1) != '.')
				$sets[$file] = [$file];
		}
		closedir($dh);
		ksort($sets);
		return $sets;
	}

	/**
	 * For a given translation locale found, make sure that all of
	 * the translation sets (individual files) are there.
	 * This is relaxed for sublocales (eg fr-CA), which are only
	 * expected to provide variations for a parent locale.
	 * 
	 * @dataProvider translations
	 */
	public function testMissingFiles($locale)
	{
		$diff = (strlen($locale) > 2) ? [] : array_diff($this->expected, $this->foundSets($locale));
		if (count($diff) > 0)
			$this->fail($locale . ' is missing: ' . implode(' ', $diff));
		else
			$this->assertTrue(true);
	}

	/**
	 * For a given translation locale found, make sure that there
	 * are no extra (unneeded) translation sets provided.
	 * 
	 * @dataProvider translations
	 */
	public function testExtraFiles($locale)
	{
		$diff = array_diff($this->foundSets($locale), $this->expected);
		if (count($diff) > 0)
			$this->fail($locale . ' has extra files: ' . implode(' ', $diff));
		else
			$this->assertTrue(true);
	}

	/**
	 * For a given translation locale found, make sure that each translation
	 * set has the appropriate keys for a complete translation.
	 * This is relaxed for sublocales (eg fr-CA), which are only
	 * expected to provide variations for a parent locale.
	 * 
	 * @dataProvider translations
	 */
	public function testMissingKeys($locale)
	{
		$found = array_intersect($this->foundSets($locale),$this->expected);
		$diff = [];
		foreach ($found as $keyset)
		{
			$group = substr($keyset, 0, -4);
			$expected = $this->loadKeys($keyset);
			$actual = $this->loadKeys($keyset, $locale);
			$missing = array_diff_key($expected, $actual);
			foreach ($missing as $key => $value)
				$diff[] = $group . '.' . $key;
		}
		if (count($diff) > 0)
			$this->fail($locale . ' is missing keys: ' . implode(' ', $diff));
		else
			$this->assertTrue(true);
	}

	/**
	 * For a given translation locale found, make sure that each translation
	 * doesn't have extra (un-needed) keys defined..
	 * 
	 * @dataProvider translations
	 */
	public function testExtraKeys($locale)
	{
		$found = array_intersect($this->foundSets($locale),$this->expected);
		$diff = [];
		foreach ($found as $keyset)
		{
			$group = substr($keyset, 0, -4);
			$expected = $this->loadKeys($keyset);
			$actual = $this->loadKeys($keyset, $locale);
			$missing = array_diff_key($actual,$expected);
			foreach ($missing as $key => $value)
				$diff[] = $group . '.' . $key;
		}
		if (count($diff) > 0)
			$this->fail($locale . ' has extra keys: ' . implode(' ', $diff));
		else
			$this->assertTrue(true);
	}

	/**
	 * Identify all the translation sets in system/Language/en
	 * 
	 * @return []
	 */
	public function expectedSets()
	{
		$dir = getcwd() . '/vendor/codeigniter4/framework/system/Language/en/';
		$dh = opendir($dir);
		$sets = [];
		while (($file = readdir($dh)) !== false)
		{
			if (substr($file, 0, 1) != '.')
				$sets[] = $file;
		}
		closedir($dh);
		ksort($sets);
		return $sets;
	}

	/**
	 * Identify all the translation sets found for a given locale
	 * 
	 * @return []
	 */
	public function foundSets($locale)
	{
		$dir = getcwd() . '/Language/' . $locale . '/';
		$dh = opendir($dir);
		$sets = [];
		while (($file = readdir($dh)) !== false)
		{
			if (substr($file, 0, 1) != '.')
				$sets[] = $file;
		}
		closedir($dh);
		ksort($sets);
		return $sets;
	}

	/**
	 * Load a set of translations, from the repo or "stock".
	 * 
	 * @return []
	 */
	public function loadKeys($which, $locale = null)
	{
		$folder = $locale ? getcwd() . '/Language/' . $locale . '/' :
				getcwd() . '/vendor/codeigniter4/framework/system/Language/en/';
		$file = $folder . $which;
		$keys = require $file;
		return $keys;
	}

}
