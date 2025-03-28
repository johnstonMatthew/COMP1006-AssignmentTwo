<?php
    class Validate {
        // Function to Check Multiple Fields are Empty
        public function checkEmpty ($data, $fields) {
            $message = null;
            //Iterate Through the Fields Array
            foreach ($fields as $value) {
                //If the Value at the Current Iteration is Empty/Null, Perform Statement Within
                if (empty($data[$value])) {
                    $message .= "<p> $value Field Cannot be Empty </p>";
                }
            }//end foreach
            return $message;
        } 
        // Function to Check a String to see if, the String is a Valid Email
        public function validEmail ($email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }

            return false;
        }
        // Function to Check a String to see if, the String is a Valid Password Based on the Requirements Listed in the Index Page
        public function validPassword ($pass) {
            // Boolean Values to Store, the Conditions of the Passwords That Should be Fulfilled
            $containsSpecial = false;
            $containsNumber = false;
            $correctLength = false;

            $specialChar = array('~', '`', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '"', '<', '>', ',', '.', '/', '?' );
            //^^^ Array Storing What is Considered a Special Character
            //Iterate Through the Password String
            for ($i = 0; $i < count($specialChar); $i++) {
                //If the Password String Contains any Element From the Special Character Array, set the Variable containSpecial to True
                if (str_contains($pass, $specialChar[$i])) {
                    $containsSpecial = true;
                }
            }
            //Iterate Through the Password String
            for ($i = 0; $i < 10; $i++) {
                //If the Password String Contains any Digit From 0-9, set the Variable containsNumber to True
                if (str_contains($pass, (string)$i ) ) {
                    $containsNumber = true;
                }
            }
            //If the Password String is 8 Characters or Longer, set the Variable correctLength to True
            if (strlen($pass) >= 8) {
                $correctLength = true;
            }
            //If Every Condition Variable is True, Return True
            if ($containsSpecial && $containsNumber && $correctLength) {
                return true;
            }
            //If at Least 1 Condition is False, Return False
            return false;
        }
    }
?>