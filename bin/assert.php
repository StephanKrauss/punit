<?php
    //------------------------------------------
    // Assertions
    //------------------------------------------

    // Array

    function assertArrayHasKey(array &$array, $key)
    {
        if (!isset($array[$key]) && !array_key_exists($key, $array)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertArrayHasKeys(array &$array, array $keys)
    {
        foreach ($keys as $key) {
            assertArrayHasKey($array, $key);
        }
    }

    function assertArrayHasSize(array $array, int $size)
    {
        if (count($array) !== $size) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    // Directory

    function assertDirectoryExists(string $path)
    {
        if (!is_dir($path)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertDirectoryIsReadable(string $path)
    {
        if (!is_dir($path) || !is_readable($path)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertDirectoryIsWritable(string $path)
    {
        if (!is_dir($path) || !is_writable($path)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    // File

    function assertFileExists(string $path)
    {
        if (!is_file($path)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertFileEquals(string $path, string $content)
    {
        if (!is_file($path) || file_get_contents($path) !== $content) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertFileIsReadable(string $path)
    {
        if (!is_file($path) || !is_readable($path)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertFileIsWritable(string $path)
    {
        if (!is_file($path) || !is_writable($path)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    // Comparaison

    function assertEmpty($variable)
    {
        if (!empty($variable)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertEquals($variable, $data)
    {
        if ($variable !== $data) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertFalse($variable)
    {
        if (false !== $variable) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertTrue($variable)
    {
        if (true !== $variable) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertGreaterThan($variable, $data)
    {
        if ($variable <= $data) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertGreaterThanOrEqual($variable, $data)
    {
        if ($variable < $data) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    // Object

    function assertInstanceOf($variable, $data)
    {
        if (!($variable instanceof $data)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertNull($variable)
    {
        if (null !== $variable) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertObjectHasAttribute($object, $attribute)
    {
        if (!property_exists($object, $attribute)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    // String

    function assertRegExp($str, $regex)
    {
        if (!preg_match($regex, $str)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertStringEndsWith($str, $needle)
    {
        if (!endsWith($str, $needle)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }

    function assertStringStartsWith($str, $needle)
    {
        if (!startsWith($str, $needle)) {
            throw new \Exception(__FUNCTION__.' failed.');
        }
    }