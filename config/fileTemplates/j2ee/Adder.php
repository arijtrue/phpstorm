/**
 * @param ${TYPE_HINT} $value
 * @return $this
 */
public function ${METHOD_NAME}($value)
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}[] = $value;
    // uncomment if you want to update other side
    //$value->set${THIS_CLASS_NAME}($this);
#else
    $this->${FIELD_NAME}[] = $value;
#end
    return $this;
}
