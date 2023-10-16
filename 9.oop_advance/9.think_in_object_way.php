<?php
class Sodium {
    static function addForm($id) : Sodium {}
    function addColumn($columSize): Sodium {}
    function addFields(FieldInterface ...$fields): Sodium {}

}

class FieldFactory {
    static function createTextField(): FieldInterface{}
    static function createRadio(): FieldInterface{}
}
class TextField extends AbstractField {

}
class Radio extends AbstractField {

}
class GoogleMap extends AbstractField {

}
interface FieldInterface {
    static function create(): FieldInterface;
    function setId() : FieldInterface;
    function setLabel() : FieldInterface;
    function setDefault() : FieldInterface;
    function setValue (): FieldInterface;

}
class AbstractField implements  FieldInterface {
    static function create(): FieldInterface {}
    function setId(): FieldInterface {}
    function setLabel() : FieldInterface{}
    function setDefault(): FieldInterface {}
    function setValue (): FieldInterface {}
}
// here i use main class directly this is not good practice because ami jodi kono fild add korte chai tahole main code e hat deoya  lagche
Sodium::addForm("myform")->addColumn(70)->addFields(
        FieldFactory::createTextField()->setId()->setDefault(),
        FieldFactory::createRadio()->setId()->setDefault()

);

// better way
Sodium::addForm("Form")->addFields(
    TextField::create('id')->setDefault()->setLabel(),
    Radio::create('id')->setDefault()->setLabel(),
    GoogleMap::create('id')->setDefault()->setLabel()
);