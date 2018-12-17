/**
 * @param ${TYPE_HINT} $value
 * @return $this
 */
public function ${METHOD_NAME}($value)
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->removeElement($value);
    // uncomment if you want to update other side
    //${PARAM_NAME}->set${THIS_CLASS_NAME}(null);
#else
    if ($key = array_search($value, $this->${FIELD_NAME}, true) !== false) {
        array_splice($this->${FIELD_NAME}, $key, 1);
    }
#end
    return $this;
}
