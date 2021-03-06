<?php
/**
 * ExtendedUserDto
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Diginize\VereinsfliegerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Vereinsflieger REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 466.98009
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Diginize\VereinsfliegerApi\Model;

use \ArrayAccess;
use \Diginize\VereinsfliegerApi\ObjectSerializer;

/**
 * ExtendedUserDto Class Doc Comment
 *
 * @category Class
 * @package  Diginize\VereinsfliegerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExtendedUserDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExtendedUserDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'int',
        'title' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'careof' => 'string',
        'street' => 'string',
        'zipcode' => 'string',
        'town' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'birthday' => 'string',
        'birthplace' => 'string',
        'homenumber' => 'string',
        'mobilenumber' => 'string',
        'phonenumber' => 'string',
        'phnenumber2' => 'string',
        'carlicenseplate' => 'string',
        'identification' => 'string',
        'natoid' => 'string',
        'policecert_validto' => 'string',
        'ice_contact1' => 'string',
        'ice_contact2' => 'string',
        'memberid' => 'string',
        'memberbegin' => 'string',
        'memberend' => 'string',
        'lettertitle' => 'string',
        'memberstatus' => 'string',
        'country' => 'string',
        'bankaccountname' => 'string',
        'directdebitauth' => 'int',
        'iban' => 'string',
        'bic' => 'string',
        'mandate' => 'string',
        'mandatedate' => 'string',
        'mailrecipient' => 'int',
        'roles' => 'string[]',
        'sector' => 'string[]',
        'functions' => 'string[]',
        'educations' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uid' => null,
        'title' => null,
        'firstname' => null,
        'lastname' => null,
        'careof' => null,
        'street' => null,
        'zipcode' => null,
        'town' => null,
        'email' => 'email',
        'gender' => null,
        'birthday' => null,
        'birthplace' => null,
        'homenumber' => null,
        'mobilenumber' => null,
        'phonenumber' => null,
        'phnenumber2' => null,
        'carlicenseplate' => null,
        'identification' => null,
        'natoid' => null,
        'policecert_validto' => null,
        'ice_contact1' => null,
        'ice_contact2' => null,
        'memberid' => null,
        'memberbegin' => null,
        'memberend' => null,
        'lettertitle' => null,
        'memberstatus' => null,
        'country' => null,
        'bankaccountname' => null,
        'directdebitauth' => null,
        'iban' => null,
        'bic' => null,
        'mandate' => null,
        'mandatedate' => null,
        'mailrecipient' => null,
        'roles' => null,
        'sector' => null,
        'functions' => null,
        'educations' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uid' => 'uid',
        'title' => 'title',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'careof' => 'careof',
        'street' => 'street',
        'zipcode' => 'zipcode',
        'town' => 'town',
        'email' => 'email',
        'gender' => 'gender',
        'birthday' => 'birthday',
        'birthplace' => 'birthplace',
        'homenumber' => 'homenumber',
        'mobilenumber' => 'mobilenumber',
        'phonenumber' => 'phonenumber',
        'phnenumber2' => 'phnenumber2',
        'carlicenseplate' => 'carlicenseplate',
        'identification' => 'identification',
        'natoid' => 'natoid',
        'policecert_validto' => 'policecert_validto',
        'ice_contact1' => 'ice_contact1',
        'ice_contact2' => 'ice_contact2',
        'memberid' => 'memberid',
        'memberbegin' => 'memberbegin',
        'memberend' => 'memberend',
        'lettertitle' => 'lettertitle',
        'memberstatus' => 'memberstatus',
        'country' => 'country',
        'bankaccountname' => 'bankaccountname',
        'directdebitauth' => 'directdebitauth',
        'iban' => 'iban',
        'bic' => 'bic',
        'mandate' => 'mandate',
        'mandatedate' => 'mandatedate',
        'mailrecipient' => 'mailrecipient',
        'roles' => 'roles',
        'sector' => 'sector',
        'functions' => 'functions',
        'educations' => 'educations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'title' => 'setTitle',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'careof' => 'setCareof',
        'street' => 'setStreet',
        'zipcode' => 'setZipcode',
        'town' => 'setTown',
        'email' => 'setEmail',
        'gender' => 'setGender',
        'birthday' => 'setBirthday',
        'birthplace' => 'setBirthplace',
        'homenumber' => 'setHomenumber',
        'mobilenumber' => 'setMobilenumber',
        'phonenumber' => 'setPhonenumber',
        'phnenumber2' => 'setPhnenumber2',
        'carlicenseplate' => 'setCarlicenseplate',
        'identification' => 'setIdentification',
        'natoid' => 'setNatoid',
        'policecert_validto' => 'setPolicecertValidto',
        'ice_contact1' => 'setIceContact1',
        'ice_contact2' => 'setIceContact2',
        'memberid' => 'setMemberid',
        'memberbegin' => 'setMemberbegin',
        'memberend' => 'setMemberend',
        'lettertitle' => 'setLettertitle',
        'memberstatus' => 'setMemberstatus',
        'country' => 'setCountry',
        'bankaccountname' => 'setBankaccountname',
        'directdebitauth' => 'setDirectdebitauth',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'mandate' => 'setMandate',
        'mandatedate' => 'setMandatedate',
        'mailrecipient' => 'setMailrecipient',
        'roles' => 'setRoles',
        'sector' => 'setSector',
        'functions' => 'setFunctions',
        'educations' => 'setEducations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'title' => 'getTitle',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'careof' => 'getCareof',
        'street' => 'getStreet',
        'zipcode' => 'getZipcode',
        'town' => 'getTown',
        'email' => 'getEmail',
        'gender' => 'getGender',
        'birthday' => 'getBirthday',
        'birthplace' => 'getBirthplace',
        'homenumber' => 'getHomenumber',
        'mobilenumber' => 'getMobilenumber',
        'phonenumber' => 'getPhonenumber',
        'phnenumber2' => 'getPhnenumber2',
        'carlicenseplate' => 'getCarlicenseplate',
        'identification' => 'getIdentification',
        'natoid' => 'getNatoid',
        'policecert_validto' => 'getPolicecertValidto',
        'ice_contact1' => 'getIceContact1',
        'ice_contact2' => 'getIceContact2',
        'memberid' => 'getMemberid',
        'memberbegin' => 'getMemberbegin',
        'memberend' => 'getMemberend',
        'lettertitle' => 'getLettertitle',
        'memberstatus' => 'getMemberstatus',
        'country' => 'getCountry',
        'bankaccountname' => 'getBankaccountname',
        'directdebitauth' => 'getDirectdebitauth',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'mandate' => 'getMandate',
        'mandatedate' => 'getMandatedate',
        'mailrecipient' => 'getMailrecipient',
        'roles' => 'getRoles',
        'sector' => 'getSector',
        'functions' => 'getFunctions',
        'educations' => 'getEducations'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const GENDER_M = 'm';
    const GENDER_W = 'w';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_M,
            self::GENDER_W,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['careof'] = isset($data['careof']) ? $data['careof'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['birthplace'] = isset($data['birthplace']) ? $data['birthplace'] : null;
        $this->container['homenumber'] = isset($data['homenumber']) ? $data['homenumber'] : null;
        $this->container['mobilenumber'] = isset($data['mobilenumber']) ? $data['mobilenumber'] : null;
        $this->container['phonenumber'] = isset($data['phonenumber']) ? $data['phonenumber'] : null;
        $this->container['phnenumber2'] = isset($data['phnenumber2']) ? $data['phnenumber2'] : null;
        $this->container['carlicenseplate'] = isset($data['carlicenseplate']) ? $data['carlicenseplate'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['natoid'] = isset($data['natoid']) ? $data['natoid'] : null;
        $this->container['policecert_validto'] = isset($data['policecert_validto']) ? $data['policecert_validto'] : null;
        $this->container['ice_contact1'] = isset($data['ice_contact1']) ? $data['ice_contact1'] : null;
        $this->container['ice_contact2'] = isset($data['ice_contact2']) ? $data['ice_contact2'] : null;
        $this->container['memberid'] = isset($data['memberid']) ? $data['memberid'] : null;
        $this->container['memberbegin'] = isset($data['memberbegin']) ? $data['memberbegin'] : null;
        $this->container['memberend'] = isset($data['memberend']) ? $data['memberend'] : null;
        $this->container['lettertitle'] = isset($data['lettertitle']) ? $data['lettertitle'] : null;
        $this->container['memberstatus'] = isset($data['memberstatus']) ? $data['memberstatus'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['bankaccountname'] = isset($data['bankaccountname']) ? $data['bankaccountname'] : null;
        $this->container['directdebitauth'] = isset($data['directdebitauth']) ? $data['directdebitauth'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['mandate'] = isset($data['mandate']) ? $data['mandate'] : null;
        $this->container['mandatedate'] = isset($data['mandatedate']) ? $data['mandatedate'] : null;
        $this->container['mailrecipient'] = isset($data['mailrecipient']) ? $data['mailrecipient'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['sector'] = isset($data['sector']) ? $data['sector'] : null;
        $this->container['functions'] = isset($data['functions']) ? $data['functions'] : null;
        $this->container['educations'] = isset($data['educations']) ? $data['educations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uid
     *
     * @return int|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int|null $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets careof
     *
     * @return string|null
     */
    public function getCareof()
    {
        return $this->container['careof'];
    }

    /**
     * Sets careof
     *
     * @param string|null $careof Adresszusatz
     *
     * @return $this
     */
    public function setCareof($careof)
    {
        $this->container['careof'] = $careof;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string|null $zipcode zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string|null
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string|null $town town
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return string|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string|null $birthday birthday
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets birthplace
     *
     * @return string|null
     */
    public function getBirthplace()
    {
        return $this->container['birthplace'];
    }

    /**
     * Sets birthplace
     *
     * @param string|null $birthplace birthplace
     *
     * @return $this
     */
    public function setBirthplace($birthplace)
    {
        $this->container['birthplace'] = $birthplace;

        return $this;
    }

    /**
     * Gets homenumber
     *
     * @return string|null
     */
    public function getHomenumber()
    {
        return $this->container['homenumber'];
    }

    /**
     * Sets homenumber
     *
     * @param string|null $homenumber private
     *
     * @return $this
     */
    public function setHomenumber($homenumber)
    {
        $this->container['homenumber'] = $homenumber;

        return $this;
    }

    /**
     * Gets mobilenumber
     *
     * @return string|null
     */
    public function getMobilenumber()
    {
        return $this->container['mobilenumber'];
    }

    /**
     * Sets mobilenumber
     *
     * @param string|null $mobilenumber private mobile
     *
     * @return $this
     */
    public function setMobilenumber($mobilenumber)
    {
        $this->container['mobilenumber'] = $mobilenumber;

        return $this;
    }

    /**
     * Gets phonenumber
     *
     * @return string|null
     */
    public function getPhonenumber()
    {
        return $this->container['phonenumber'];
    }

    /**
     * Sets phonenumber
     *
     * @param string|null $phonenumber business
     *
     * @return $this
     */
    public function setPhonenumber($phonenumber)
    {
        $this->container['phonenumber'] = $phonenumber;

        return $this;
    }

    /**
     * Gets phnenumber2
     *
     * @return string|null
     */
    public function getPhnenumber2()
    {
        return $this->container['phnenumber2'];
    }

    /**
     * Sets phnenumber2
     *
     * @param string|null $phnenumber2 business mobile
     *
     * @return $this
     */
    public function setPhnenumber2($phnenumber2)
    {
        $this->container['phnenumber2'] = $phnenumber2;

        return $this;
    }

    /**
     * Gets carlicenseplate
     *
     * @return string|null
     */
    public function getCarlicenseplate()
    {
        return $this->container['carlicenseplate'];
    }

    /**
     * Sets carlicenseplate
     *
     * @param string|null $carlicenseplate carlicenseplate
     *
     * @return $this
     */
    public function setCarlicenseplate($carlicenseplate)
    {
        $this->container['carlicenseplate'] = $carlicenseplate;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return string|null
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param string|null $identification ID card number
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets natoid
     *
     * @return string|null
     */
    public function getNatoid()
    {
        return $this->container['natoid'];
    }

    /**
     * Sets natoid
     *
     * @param string|null $natoid NatoID
     *
     * @return $this
     */
    public function setNatoid($natoid)
    {
        $this->container['natoid'] = $natoid;

        return $this;
    }

    /**
     * Gets policecert_validto
     *
     * @return string|null
     */
    public function getPolicecertValidto()
    {
        return $this->container['policecert_validto'];
    }

    /**
     * Sets policecert_validto
     *
     * @param string|null $policecert_validto Führungszeugnis
     *
     * @return $this
     */
    public function setPolicecertValidto($policecert_validto)
    {
        $this->container['policecert_validto'] = $policecert_validto;

        return $this;
    }

    /**
     * Gets ice_contact1
     *
     * @return string|null
     */
    public function getIceContact1()
    {
        return $this->container['ice_contact1'];
    }

    /**
     * Sets ice_contact1
     *
     * @param string|null $ice_contact1 Emergency contact 1
     *
     * @return $this
     */
    public function setIceContact1($ice_contact1)
    {
        $this->container['ice_contact1'] = $ice_contact1;

        return $this;
    }

    /**
     * Gets ice_contact2
     *
     * @return string|null
     */
    public function getIceContact2()
    {
        return $this->container['ice_contact2'];
    }

    /**
     * Sets ice_contact2
     *
     * @param string|null $ice_contact2 Emergency contact 2
     *
     * @return $this
     */
    public function setIceContact2($ice_contact2)
    {
        $this->container['ice_contact2'] = $ice_contact2;

        return $this;
    }

    /**
     * Gets memberid
     *
     * @return string|null
     */
    public function getMemberid()
    {
        return $this->container['memberid'];
    }

    /**
     * Sets memberid
     *
     * @param string|null $memberid Member number
     *
     * @return $this
     */
    public function setMemberid($memberid)
    {
        $this->container['memberid'] = $memberid;

        return $this;
    }

    /**
     * Gets memberbegin
     *
     * @return string|null
     */
    public function getMemberbegin()
    {
        return $this->container['memberbegin'];
    }

    /**
     * Sets memberbegin
     *
     * @param string|null $memberbegin Eintrittsdatum
     *
     * @return $this
     */
    public function setMemberbegin($memberbegin)
    {
        $this->container['memberbegin'] = $memberbegin;

        return $this;
    }

    /**
     * Gets memberend
     *
     * @return string|null
     */
    public function getMemberend()
    {
        return $this->container['memberend'];
    }

    /**
     * Sets memberend
     *
     * @param string|null $memberend Austrittsdatum
     *
     * @return $this
     */
    public function setMemberend($memberend)
    {
        $this->container['memberend'] = $memberend;

        return $this;
    }

    /**
     * Gets lettertitle
     *
     * @return string|null
     */
    public function getLettertitle()
    {
        return $this->container['lettertitle'];
    }

    /**
     * Sets lettertitle
     *
     * @param string|null $lettertitle Briefanrede
     *
     * @return $this
     */
    public function setLettertitle($lettertitle)
    {
        $this->container['lettertitle'] = $lettertitle;

        return $this;
    }

    /**
     * Gets memberstatus
     *
     * @return string|null
     */
    public function getMemberstatus()
    {
        return $this->container['memberstatus'];
    }

    /**
     * Sets memberstatus
     *
     * @param string|null $memberstatus Membership status
     *
     * @return $this
     */
    public function setMemberstatus($memberstatus)
    {
        $this->container['memberstatus'] = $memberstatus;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets bankaccountname
     *
     * @return string|null
     */
    public function getBankaccountname()
    {
        return $this->container['bankaccountname'];
    }

    /**
     * Sets bankaccountname
     *
     * @param string|null $bankaccountname Mitgliedsstatus
     *
     * @return $this
     */
    public function setBankaccountname($bankaccountname)
    {
        $this->container['bankaccountname'] = $bankaccountname;

        return $this;
    }

    /**
     * Gets directdebitauth
     *
     * @return int|null
     */
    public function getDirectdebitauth()
    {
        return $this->container['directdebitauth'];
    }

    /**
     * Sets directdebitauth
     *
     * @param int|null $directdebitauth Lastschrift
     *
     * @return $this
     */
    public function setDirectdebitauth($directdebitauth)
    {
        $this->container['directdebitauth'] = $directdebitauth;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string|null $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets mandate
     *
     * @return string|null
     */
    public function getMandate()
    {
        return $this->container['mandate'];
    }

    /**
     * Sets mandate
     *
     * @param string|null $mandate Mandate id
     *
     * @return $this
     */
    public function setMandate($mandate)
    {
        $this->container['mandate'] = $mandate;

        return $this;
    }

    /**
     * Gets mandatedate
     *
     * @return string|null
     */
    public function getMandatedate()
    {
        return $this->container['mandatedate'];
    }

    /**
     * Sets mandatedate
     *
     * @param string|null $mandatedate mandatedate
     *
     * @return $this
     */
    public function setMandatedate($mandatedate)
    {
        $this->container['mandatedate'] = $mandatedate;

        return $this;
    }

    /**
     * Gets mailrecipient
     *
     * @return int|null
     */
    public function getMailrecipient()
    {
        return $this->container['mailrecipient'];
    }

    /**
     * Sets mailrecipient
     *
     * @param int|null $mailrecipient Rundmailempfänger
     *
     * @return $this
     */
    public function setMailrecipient($mailrecipient)
    {
        $this->container['mailrecipient'] = $mailrecipient;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles Assigned roles
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets sector
     *
     * @return string[]|null
     */
    public function getSector()
    {
        return $this->container['sector'];
    }

    /**
     * Sets sector
     *
     * @param string[]|null $sector Zugeordnete Sparten
     *
     * @return $this
     */
    public function setSector($sector)
    {
        $this->container['sector'] = $sector;

        return $this;
    }

    /**
     * Gets functions
     *
     * @return string[]|null
     */
    public function getFunctions()
    {
        return $this->container['functions'];
    }

    /**
     * Sets functions
     *
     * @param string[]|null $functions functions
     *
     * @return $this
     */
    public function setFunctions($functions)
    {
        $this->container['functions'] = $functions;

        return $this;
    }

    /**
     * Gets educations
     *
     * @return string[]|null
     */
    public function getEducations()
    {
        return $this->container['educations'];
    }

    /**
     * Sets educations
     *
     * @param string[]|null $educations Nicht beendete Lehrpläne
     *
     * @return $this
     */
    public function setEducations($educations)
    {
        $this->container['educations'] = $educations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


