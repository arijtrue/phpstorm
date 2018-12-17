# PHPSTORM
## Plugins:
 - .ignore
 - BashSupport
 - PHP Annotation
 - PHP composer.json support
 - PHP RegExp Support
 - String Manipulation
 - PHP Inspections (EA Extended)
 - Symfony Plugin # Specific for symfony
 - Adders/Removers Generator

## Live templates:
- knp live template https://github.com/knpuniversity/phpstorm-settings

# use phpstorm online curse
- https://knpuniversity.com/screencast/phpstorm
#Before start working 
# Config File and Code Templates
Replace data/fileTemplates to your configFolder/fileTemplates/. Or changes 
### 1)Gettres and setters
Settings->Editor->file And Code Templates->Code
* PHP Constructor change to
   ```
    /**
    ${PARAM_DOC}
    */
    public function __construct(${PARAM_LIST}) {${BODY}}
    ```
* PHP Getter Methos
   ```
   /**
    * @param ${TYPE_HINT} $value
    #if (${STATIC} != "static")
     * @return $this
     #end
     */
    public ${STATIC} function set${NAME}($value)
    {
    #if (${STATIC} == "static")
        self::$${FIELD_NAME} = $value;
    #else
        $this->${FIELD_NAME} = $value;
    
        return $this;
    #end
    }
   ```
* PHP Setter Method
```
/**
 * @return ${TYPE_HINT}
 */
public ${STATIC} function get${NAME}()
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
```
### 2)After install Adders/Removers Generator configure templater form adder and Remover
 Settings->Editor->File And Code Templates->Other
* Adder change to
```
/**
 * @param ${TYPE_HINT} $value
 * @return $this
 */
public function ${METHOD_NAME}($value)
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->add($value);
#else
    $this->${FIELD_NAME}[] = $value;
#end
    return $this;
}
```
* Remover change to 
```
/**
 * @param ${TYPE_HINT} $value
 * @return $this
 */
public function ${METHOD_NAME}($value)
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->removeElement($value);
#else
    if ($key = array_search($value, $this->${FIELD_NAME}, true) !== false) {
        array_splice($this->${FIELD_NAME}, $key, 1);
    }
#end
    return $this;
}

```
## 3) TODO Includes
Changes 
# Code Style
TODO

# Config Inspections
Settings->Editor->Inspections
#### 1) General:
* Inconsistent line separator
* Line is longer than allowed be code style
* Problematic whitespace
* TODO comment
* Structural Search Inspections
#### 2) PHP->Code Style:
* Class path doesn't match project structure
* Multiple class declarations in one file
* Redundant Closing tag 
* Short syntax can be used in array literals.
* This inspection reports usages of a variable variable.
#### 3) PHP->General
* Static class method called as dynamic.
# Config Directories
Before start projects need config Directories.
File->Settings->
# Config PHP Inspections (EA Extended)
# Config Symfony2 Plugin
# Life Templates
# PHP-xdebug
Setting up a xdebug is done [by reference](https://www.jetbrains.com/help/phpstorm/2017.1/configuring-xdebug.html).

To be able to execute the console command with debugging xdebug it is necessary:

- to add to the director ~ / bin file php-xdebug to the attacker:
```
#!/bin/sh

XDEBUG_CONFIG="idekey=PHPSTORM" php "$@"
```
- run the command in the console
```
 $chmod +x ~/bin/php-xdebug
```
Usage:

- for debugging, for example, the script 'php-script' in the console execute the command
```
php-xdebug php-script

```
