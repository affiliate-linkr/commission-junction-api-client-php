- .php

namespace AffiliateLinkr\CommissionJunction;

class ApiCredentials {
  
  const ENV_KEY = 'CJ_DEVELOPER_KEY';
  const ENV_SITE = 'CJ_WEBSITE_ID';
  const CREDENTIALS_FILE = '.affiliatelinkr/cj';
  const CREDENTIALS_FILE_PROFILE = "Default";
  
  private $developerKey;
  private $websiteId;
  
  function __construct($developerKey = null, $websiteId = null) {
    $this->setDeveloperKey($developerKey);
    $this->setWebsiteId($websiteId);
  }
  
  function setDeveloperKey($value) {
    $this->developerKey = trim($value);
  }
  
  function getDeveloperKey() {
    return $this->developerKey;
  }
  
  function setWebsiteId($value) {
    $this->websiteId = trim($value);
  }
  
  function getWebsiteId() {
    return $this->websiteId;
  }  
  
  /**
   * Factory method for creating new credentials. This factory method will
   * create the appropriate credentials object
   * based on the passed configuration options.
   *
   * @param array $config Options to use when instantiating the credentials
   *
   */
  public static function factory($config = array()) {
    // Create the credentials object
    if (!isset($config[self::ENV_KEY]) || !isset($config[self::ENV_SITE])) {
      $credentials = self::createFromEnvironment($config);
    } else {
      $credentials = new self($config[self::ENV_KEY], $config[self::ENV_SITE]);
    }
    return $credentials;
  }
  

  /**
   * When no keys are provided, attempt to create them based on the
   * environment or instance profile credentials.
   *
   * @param array|Collection $config
   *
   * @return CredentialsInterface
   */
  private static function createFromEnvironment($config = array()) {
    // Get key from ENV variables
    $envKey = self::getEnvVar(self::ENV_KEY);
    $envSite = self::getEnvVar(self::ENV_SITE);

    // Use credentials from the environment variables if available
    if ($envKey && $envSite) {
      return new self($envKey, $envSite);
    }
    
    // Use credentials from the ini file in HOME directory if available
    $home = self::getHomeDir();
    if ($home && file_exists("{$home}/" . self::CREDENTIALS_FILE)) {
      return self::fromIni("{$home}/" . self::CREDENTIALS_FILE);
    }  
  }
  
  /**
   * Create credentials from the credentials ini file in the HOME directory.
   *
   * @param string|null $filename Pass a string to specify the location of the
   * credentials files. If null is passed, the
   * SDK will attempt to find the configuration
   * file at in your HOME directory at
   * ~/.affiliatelinkr/cj.
   * @return ApiCredentials
   * @throws \RuntimeException if the file cannot be found, if the file is
   * invalid, or if the profile is invalid.
   */
  public static function fromIni($filename = null) {
    if (!$filename) {
      $filename = self::getHomeDir() . '/' . self::CREDENTIALS_FILE_PROFILE;
    }
    if (!file_exists($filename) || !($data = parse_ini_file($filename, true))) {
      throw new \RuntimeException("Invalid Commission Junction credentials file: {$filename}.");
    }
    $profile = self::CREDENTIALS_FILE_PROFILE;
    if (empty($data[$profile])) {
      throw new \RuntimeException("Invalid Commission Junction credentials profile {$profile} in {$filename}.");
    }
    return new self(
      $data[$profile][self::ENV_KEY],
      $data[$profile][self::ENV_SITE]
    );
  }  
  
  private static function getHomeDir() {
    // On Linux/Unix-like systems, use the HOME environment variable
    if ($homeDir = self::getEnvVar('HOME')) {
      return $homeDir;
    }
    return null;
  }  
  
  /**
   * Fetches the value of an environment variable by checking $_SERVER and getenv().
   *
   * @param string $var Name of the environment variable
   *
   * @return mixed|null
   */
  private static function getEnvVar($var) {
    return isset($_SERVER[$var]) ? $_SERVER[$var] : getenv($var);
  }  
  
}
