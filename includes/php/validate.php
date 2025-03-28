<?php
    class Validate {
        public function checkEmpty ($data, $fields) {
            $message = null;
            
            foreach ($fields as $value) {

                if (empty($data[$value])) {
                    $message .= "<p> $value Field Cannot be Empty </p>";
                }
            }//end foreach
            return $message;
        } 
        
        public function validEmail ($email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }

            return false;
        }

        public function validPassword ($pass) {
            $containsSpecial = false;
            $containsNumber = false;
            $correctLength = false;

            $specialChar = array('~', '`', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '"', '<', '>', ',', '.', '/', '?' );

            for ($i = 0; $i < count($specialChar); $i++) {
                if (str_contains($pass, $specialChar[$i])) {
                    $containsSpecial = true;
                }
            }

            for ($i = 0; $i < 10; $i++) {
                if (str_contains($pass, (string)$i ) ) {
                    $containsNumber = true;
                }
            }

            if (strlen($pass) >= 8) {
                $correctLength = true;
            }

            if ($containsSpecial && $containsNumber && $correctLength) {
                return true;
            }
            return false;
        }
    }
?>