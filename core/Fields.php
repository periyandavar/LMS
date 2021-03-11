<?php
class Fields implements Iterator
{
    /**
     * @var array $fields list of fields stored in array
     */
    private $fields;

    /**
     * @param array $fields null value or array of strings
     * constructor function used to initiate $fields
     */
    public function __construct(?array $fields)
    {
        if ($fields == NULL) {
            $fields = $fields;
        } else {
            foreach ($fields as $field) {
                $this->fields[$field]['data'] = null;
                $this->fields[$field]['rule'] = null;
            }
        }
    }
    /**
     * add passed set of fields(strings) to $fields
     */
    public function addFields(...$fields)
    {
        foreach ($fields as $field) {
            $this->fields[$field]['data'] = null;
            $this->fields[$field]['rule'] = null;
        }
    }
    /**
     * removes fields
     * removes the set of passed fields(strings) to $fields
     */
    public function removeFields(...$fields)
    {
        foreach ($fields as $field) {
            unset($this->$fields[$field]);
        }
        $this->fields = array_values($fields);
    }

    /**
     * @param array $values
     * sets the values for the fields
     */
    public function addValues(array $values)
    {
        foreach ($values as $key => $value) {
            if (isset($this->fields[$key])) {
                $this->fields[$key]['data'] = $value;
            }
        }
    }
    /**
     * @param array $fieldsRules as (fields=>rules)
     */
    public function addRule(array $fieldsRules)
    {
        foreach ($fieldsRules as $key => $value) {
            if (isset($this->fields[$key])) {
                $this->fields[$key]['rule'] = $value;
            }
        }
    }

    /**
     * return fields data values as association array
     */
    public function getData()
    {
        $fieldsData=[];
        foreach ($this->fields as $key => $value) {
            if (isset($value['data'])) {
                $fieldsData[$key] = $value['data'];
            }
        }
        return $fieldsData;
    }

    /**
     * adds  the custom rule to the fields 
     * @param string $field fieldname
     * @param ValidationRule $vr ValidationRule Object
     */
    public function addCustomeRule(string $field,ValidationRule $vr)
    {
        if (isset($this->fields[$field])) {
            $this->fields[$field]['rule'] = $vr;
        }
    }

    /**
     * change the data value for the fields
     * @param string $key field name
     * @param string $value filed value
     */
    public function setData($key, $value)
    {
        if (isset($this->fields[$key])) {
            $this->fields[$key]['data'] = $value;
        }
    }

    public function rewind()
    {
        reset($this->fields);
    }

    public function valid()
    {
        $flag = key($this->fields);
        $flag = ($flag !== NULL);
        return $flag;
    }

    public function key()
    {
        return key($this->fields);
    }

    public function current()
    {
        return current($this->fields);
    }

    public function next()
    {
        return next($this->fields);
    }
}
