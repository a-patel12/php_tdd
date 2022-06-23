<?php
namespace Apatel\PhpTdd;

use http\Exception\InvalidArgumentException;

class StringMethods{

    /**
     * @param array $names
     * @return string
     */
    public function societyName($names){
        try {
            if (count($names) < 2) {
                throw new \InvalidArgumentException('Please provide more than one name to generate society name.');
            }
            sort($names);
            $society_name = "";
            foreach($names as $name) {
                $society_name.= $name[0];
            }
            return strtoupper($society_name);

        }
        catch(InvalidArgumentException $exception) {
            return 'Error message: ' . $exception->getMessage();
        }
    }

}