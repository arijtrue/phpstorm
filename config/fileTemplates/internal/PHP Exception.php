<?php

#if (${NAMESPACE})
namespace ${NAMESPACE};
use ${EXCEPTION};
#end

class ${NAME} extends ${EXCEPTION} {
#if (${EXCEPTION_MESSAGE})
    public function __construct() {
        parent::__construct('${EXCEPTION_MESSAGE}');
    }
#end
}
