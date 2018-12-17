/**
* @param ${TYPE_HINT} $value
#if (${STATIC} != "static")
 * @return $this
 #else
 * @return ${CLASS_NAME}
 #end
 */
public function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$value})#if(${RETURN_TYPE}): ${CLASS_NAME}#else#end
{
    $this->${FIELD_NAME} = $${PARAM_NAME};
    return $this;
}
