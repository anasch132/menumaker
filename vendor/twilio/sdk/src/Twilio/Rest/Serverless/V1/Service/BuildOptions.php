<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Serverless\V1\Service;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class BuildOptions {
    /**
     * @param string[] $assetVersions The list of Asset Version resource SIDs to
     *                                include in the build
     * @param string[] $functionVersions The list of the Variable resource SIDs to
     *                                   include in the build
     * @param string $dependencies A list of objects that describe the Dependencies
     *                             included in the build
     * @return CreateBuildOptions Options builder
     */
    public static function create(array $assetVersions = Values::ARRAY_NONE, array $functionVersions = Values::ARRAY_NONE, string $dependencies = Values::NONE): CreateBuildOptions {
        return new CreateBuildOptions($assetVersions, $functionVersions, $dependencies);
    }
}

class CreateBuildOptions extends Options {
    /**
     * @param string[] $assetVersions The list of Asset Version resource SIDs to
     *                                include in the build
     * @param string[] $functionVersions The list of the Variable resource SIDs to
     *                                   include in the build
     * @param string $dependencies A list of objects that describe the Dependencies
     *                             included in the build
     */
    public function __construct(array $assetVersions = Values::ARRAY_NONE, array $functionVersions = Values::ARRAY_NONE, string $dependencies = Values::NONE) {
        $this->options['assetVersions'] = $assetVersions;
        $this->options['functionVersions'] = $functionVersions;
        $this->options['dependencies'] = $dependencies;
    }

    /**
     * The list of Asset Version resource SIDs to include in the build.
     *
     * @param string[] $assetVersions The list of Asset Version resource SIDs to
     *                                include in the build
     * @return $this Fluent Builder
     */
    public function setAssetVersions(array $assetVersions): self {
        $this->options['assetVersions'] = $assetVersions;
        return $this;
    }

    /**
     * The list of the Variable resource SIDs to include in the build.
     *
     * @param string[] $functionVersions The list of the Variable resource SIDs to
     *                                   include in the build
     * @return $this Fluent Builder
     */
    public function setFunctionVersions(array $functionVersions): self {
        $this->options['functionVersions'] = $functionVersions;
        return $this;
    }

    /**
     * A list of objects that describe the Dependencies included in the build. Each object contains the `name` and `version` of the dependency.
     *
     * @param string $dependencies A list of objects that describe the Dependencies
     *                             included in the build
     * @return $this Fluent Builder
     */
    public function setDependencies(string $dependencies): self {
        $this->options['dependencies'] = $dependencies;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Serverless.V1.CreateBuildOptions ' . $options . ']';
    }
}