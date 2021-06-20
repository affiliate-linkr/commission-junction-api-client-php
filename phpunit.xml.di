<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="./tests/bootstrap.php"
         colors="true"
         processIsolation="false"
         stopOnFailure="false"
         syntaxCheck="false"
         convertErrorsToExceptions="true"
         convertNoticesToExceptions="true"
         convertWarningsToExceptions="true"
         testSuiteLoaderClass="PHPUnit_Runner_StandardTestSuiteLoader">

    <testsuites>
        <testsuite name="Aws">
            <directory>tests/AffiliateLinkr/Tests</directory>
        </testsuite>
    </testsuites>

    <!-- Exclude the integration tests in regular unit tests -->
    <groups>
        <exclude>
            <group>integration</group>
            <group>performance</group>
        </exclude>
    </groups>

    <filter>
        <whitelist>
            <directory suffix=".php">./src/AffiliateLinkr</directory>
        </whitelist>
    </filter>

</phpunit>
