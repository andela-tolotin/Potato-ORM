<?php

/**
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */
namespace Laztopaz\PotatoORM;

interface BaseModelInterface
{
    /**
     * This method gets all the record from a particular table.
     *
     * @params void
     *
     * @return associative array
     */
    public static function getAll();

    /**
     * This method create or update record in a database table.
     *
     * @params void
     *
     * @return bool true or false;
     */
    public function save();

    /**
     * This method delete a row from the table by the row id.
     *
     * @params int $id
     *
     * @return bool true or false
     */
    public static function destroy($id);

    /**
     * This method find a record by id.
     *
     * @params int $id
     *
     * @return object find
     */
    public static function find($id);
}
