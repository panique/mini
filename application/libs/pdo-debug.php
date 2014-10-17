<?php

// if it does not exist, add the function debugPDO to PHP
// for more info about this function, see https://github.com/panique/pdo-debug
if (!function_exists('debugPDO')) {

    /**
     * debugPDO
     *
     * Shows the SQL query constructed by PDO. The magic behind: A simple function that combines your parameters and
     * the raw query. Not perfect, but does the job.
     * 
     * @author Panique <https://github.com/panique/pdo-debug>
     * @param string $raw_sql
     * @param array $parameters
     * @return string
     */
    function debugPDO($raw_sql, $parameters) {

        $keys = array();
        $values = $parameters;

        foreach ($parameters as $key => $value) {

            // check if named parameters (':param') or anonymous parameters ('?') are used
            if (is_string($key)) {
                $keys[] = '/' . $key . '/';
            } else {
                $keys[] = '/[?]/';
            }

            // bring parameter into human-readable format
            if (is_string($value)) {
                $values[$key] = "'" . $value . "'";
            } elseif (is_array($value)) {
                $values[$key] = implode(',', $value);
            } elseif (is_null($value)) {
                $values[$key] = 'NULL';
            }
        }

        /*
        echo "<br> [DEBUG] Keys:<pre>";
        print_r($keys);
        
        echo "\n[DEBUG] Values: ";
        print_r($values);
        echo "</pre>";
        */
        
        $raw_sql = preg_replace($keys, $values, $raw_sql, 1, $count);

        return $raw_sql;
    }

}