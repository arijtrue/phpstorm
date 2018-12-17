/**
 * @param ${TYPE_HINT} $value
#if (${STATIC} != "static")
* @return $this
#end
 */
public ${STATIC} function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$value)#if (${STATIC} != "static"): self#end
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $value;
#else
    $this->${FIELD_NAME} = $value;
    return $this;
#end
}
