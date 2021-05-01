<?php


        interface ITI{

            const countt=10;
            #only abstract functions
            # You define the signature of the functions as you like
            function printWelcome();
            function helloWorld($name);
        }

        interface B {
            function binterface();
        }
        # interfaces  with class

        class Test implements ITI{

            # override the interface methods
           function printWelcome(){
           }

            function helloWorld($name){
            }

        }

        class Track implements ITI,B{
            function printWelcome(){
            }

            function helloWorld($name){
            }

            function binterface(){

            }
        }


        ##########################  inheritance between interfaces

        interface A {
            function A();
        }
        interface BB {
            function B();
        }
        interface C extends A,BB{
            function c();
        }

        class testInhertiance implements C{
            function A(){

            }
            function B(){

            }
            function c(){

            }
        }








