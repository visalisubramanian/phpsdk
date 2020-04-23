<?php

namespace com\zoho\crm\api\util;

/**
 * This class uses the SDK constants name reference.
 */
class Constants
{

    const CLIENT_ID = "client_id";
    
    const CLIENT_SECRET = "client_secret";
    
    const REDIRECT_URL = "redirect_uri";

    const GRANT_TYPE = "grant_type";

    const REFRESH_TOKEN = "refresh_token";

    const EXPIRES_IN = "expires_in";
    
    const EXPIRES_IN_SEC = "expires_in_sec";

    const ACCESS_TOKEN = "access_token";

    const REQUEST_METHOD_POST = "POST";

    const REQUEST_METHOD_GET = "GET";

    const CODE = "code";

    const GRANT_TYPE_AUTH_CODE = "authorization_code";

    const AUTHORIZATION = "Authorization";

    const AUTHENTICATION_FAILURE = "AUTHENTICATION_FAILURE";
    
    const DATATYPE_VALIDATE = "DATATYPE_VALIDATE";

    const ERROR = "error";
    
    const REQUEST_METHOD_PUT = "PUT";
    
    const REQUEST_METHOD_DELETE = "DELETE";
    
    const OAUTH_HEADER_PREFIX = "Zoho-oauthtoken ";
    
    const API_NAME = "api_name";
    
    const INVALID_ID_MSG = "The given id seems to be invalid.";
    
    const API_MAX_RECORDS_MSG = "Cannot process more than 100 records at a time.";
    
    const API_MAX_ORGTAX_MSG = "Cannot process more than 100 org taxes at a time.";
    
    const API_MAX_NOTES_MSG = "Cannot process more than 100 notes at a time.";
    
    const API_MAX_TAGS_MSG = "Cannot process more than 50 tags at a time.";
    
    const API_MAX_RECORD_TAGS_MSG = "Cannot process more than 10 tags at a time.";
    
    const INVALID_DATA = "INVALID_DATA";
    
    const CODE_SUCCESS = "SUCCESS";
    
    const STATUS_SUCCESS = "success";
    
    const STATUS_ERROR = "error";

    const SDK_ERROR = "ZCRM_INTERNAL_ERROR";
    
    const LEADS = "Leads";
    
    const ACCOUNTS = "Accounts";
    
    const CONTACTS = "Contacts";
    
    const DEALS = "Deals";
    
    const QUOTES = "Quotes";
    
    const SALESORDERS = "SalesOrders";
    
    const INVOICES = "Invoices";
    
    const PURCHASEORDERS = "PurchaseOrders";
    
    const PER_PAGE = "per_page";
    
    const PAGE = "page";
    
    const COUNT = "count";
    
    const MORE_RECORDS = "more_records";
    
    const ALLOWED_COUNT = "allowed_count";
    
    const MESSAGE = "message";
    
    const STATUS = "status";
    
    const DATA = "data";

    const DETAILS = "details";

    const MODULES = "modules";

    const CUSTOM_VIEWS = "custom_views";
    
    const TAGS = "tags";
    
    const TAXES = "taxes";
    
    const INFO = "info";

    const ORG = "org";
    
    const READ = "read";
    
    const RESULT = "result";
    
    const UPLOAD = "upload";
    
    const WRITE = "write";
    
    const CALLBACK = "callback";

    const FILETYPE = "file_type";
    
    const QUERY = "query";
    
    const USERS = "users";
    
    const HTTP_CODE = "http_code";
    
    const VARIABLES = "variables";
    
    const PRIMITIVE_TYPES = array("string", "integer", "boolean", "float", "double");

    const MANDATORY_VALUE_MISSING_ERROR = "MANDATORY VALUE MISSING ERROR";

    const MAXIMUM_LENGTH_ERROR = "MAXIMUM LENGTH ERROR";

    const TYPE_ERROR = "TYPE ERROR";

    const METHOD_NOT_FOUND = "METHOD NOT FOUND";
    
    const EXCEPTION_IS_KEY_MODIFIED = "Exception in calling isKeyModified";

    const ZOHO_SDK = "X-ZOHO-SDK";

    const HEADERS = "headers";
    
    const MYSQL_HOST = "localhost";
    
    const MYSQL_DATABASE_NAME = "zohooauth";
    
    const MYSQL_USER_NAME = "root";
    
    const MYSQL_PORT_NUMBER = "3306";
    
    const GET_TOKEN_DB_ERROR = "Exception in getToken - DBStore";
    
    const TOKEN_STORE = "TOKEN_STORE";
    
    const SAVE_TOKEN_DB_ERROR = "Exception in save_token - DBStore";
    
    const DELETE_TOKEN_DB_ERROR = "Exception in delete_token - DBStore";
    
    const DB_ERROR = "Failed to connect to MySQL:";
    
    const USER_MAIL = "user_mail";
    
    const GRANT_TOKEN = "grant_token";
    
    const EXPIRY_TIME = "expiry_time";
    
    const GET_TOKEN_FILE_ERROR = "Exception in get_token - FileStore";
    
    const SAVE_TOKEN_FILE_ERROR = "Exception in save_token - FileStore";
    
    const DELETE_TOKEN_FILE_ERROR = "Exception in delete_token - FileStore";
    
    const SAVE_TOKEN_ERROR = "Exception in saving tokens";
    
    const GET_TOKEN_ERROR = "Exception in getting access token";
    
    const INVALID_CLIENT_ERROR = "INVALID CLIENT ERROR";
    
    const RESPONSE = "response";
    
    const CONTENT_TYPE = 'content-type';
    
    const NAME = "name";
    
    const VALUES = "values";
    
    const TYPE = "type";
    
    const STREAM_WRAPPER_CLASS_PATH = "com\zoho\crm\api\util\StreamWrapper"; 
    
    const FIELD  = "field";
    
    const CLASS_KEY = "class";
    
    const INDEX = "index";
    
    const ACCEPTED_VALUES = "accepted-values";
    
    const UNACCEPTED_VALUES_ERROR = "UNACCEPTED VALUES ERROR";
    
    const UNIQUE = "unique";
    
    const FIRST_INDEX = "first-index";
    
    const NEXT_INDEX = "next-index";
    
    const UNIQUE_KEY_ERROR = "UNIQUE KEY ERROR";
    
    const MIN_LENGTH= "min-length";
    
    const MAX_LENGTH= "max-length";
    
    const MAXIMUM_LENGTH = "maximum-length";
    
    const MINIMUM_LENGTH = "minimum-length";
    
    const MINIMUM_LENGTH_ERROR = "MINIMUM LENGTH ERROR";
    
    const REGEX = "regex";
    
    const INSTANCE_NUMBER = "instance-number";
    
    const REGEX_MISMATCH_ERROR = "REGEX MISMATCH ERROR";
    
    const ACCEPTED_TYPE = "accepted_type";
    
    const ARRAY_KEY = "array";
    
    const LIST = "List";
    
    const MAP = "Map";
    
    const HASHMAP = "HashMap";
    
    const INTEGER_KEY = "Integer";
    
    const LONG = "Long";
    
    const BOOLEAN_KEY = "Boolean";
    
    const DATE = "Date";
    
    const CONTENT = "content";
    
    const CONTENT_DISPOSITION  = "Content-Disposition";
    
    const CONTENT_DISPOSITION1 = 'Content-disposition';
    
    const READ_ONLY = "read-only";
    
    const IS_KEY_MODIFIED = "isKeyModified";
    
    const REQUIRED = "required";
    
    const MANDATORY_KEY_MISSING_ERROR = "Value missing for mandatory key: ";
    
    const SET_KEY_MODIFIED = "setKeyModified";
    
    const EXCEPTION_SET_KEY_MODIFIED = "Exception in calling setKeyModified";
    
    const STRUCTURE_NAME = "structure_name";
    
    const KEYS = "keys";
    
    const STRING_KEY = "string";
    
    const INTERFACE_KEY = "interface";
    
    const CLASSES = "classes";
    
    const RECORD_NAMESPACE = "com\zoho\crm\api\record\Record";
    
    const KEY_VALUES = "keyValues";
    
    const LOGFILE_NAME = "sdk_logs.log";
    
    const THREAD_LOCAL = "ThreadLocal";
    
    const EMAIL = "email";
    
    const USER_ERROR = "USER ERROR";
    
    const EXPECTED_TYPE = "expected-type";

    const REFRESH = "refresh";

    const GRANT = "grant";

    const FATAL = "FATAL";

    const ERROR_KEY = "ERROR";

    const WARNING = "WARNING";

    const INFO_KEY = "INFO";

    const DEBUG = "DEBUG";

    const TRACE = "TRACE";

    const ALL = "ALL";

    const TOKEN_ERROR = "TOKEN ERROR";

    const TOKEN = "TOKEN";

    const TOKEN_TYPE = "TOKEN_TYPE";

    const TOKEN_INITIALIZATION_ERROR = 'Exception in OAuthToken constructor';
}
