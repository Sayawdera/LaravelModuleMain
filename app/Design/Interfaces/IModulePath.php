<?php

namespace App\Design\Interfaces;

interface IModulePath
{
    /**
     * @param string $angularArgument
     * @return mixed
     */
    public static function getAngularPath( string $angularArgument ): mixed;

    /**
     * @param string $reactArgument
     * @return mixed
     */
    public static function getReactPath( string $reactArgument ): mixed;

    /**
     * @param string $vueArgument
     * @return mixed
     */
    public static function getVuePath( string $vueArgument ): mixed;

    /**
     * @param string $storeRequestArgument
     * @return mixed
     */
    public static function getStoreRequestPath( string $storeRequestArgument ): mixed;

    /**
     * @param string $updateRequestArgument
     * @return mixed
     */
    public static function getUpdateRequestPath( string $updateRequestArgument ): mixed;

    /**
     * @param string $controllerArgument
     * @return mixed
     */
    public static function getControllerPath( string $controllerArgument ): mixed;

    /**
     * @param string $modelArgument
     * @return mixed
     */
    public static function getModelPath( string $modelArgument ): mixed;

    /**
     * @param string $serviceArgument
     * @return mixed
     */
    public static function getServicePath( string $serviceArgument ): mixed;

    /**
     * @param string $repositoryArgument
     * @return mixed
     */
    public static function getRepositoryPath( string $repositoryArgument ): mixed;

    /**
     * @param string $testArgument
     * @param string $testTypes
     * @param string $methodArguments
     * @return mixed
     */
    public static function getTestPath( string $testArgument, string $testTypes, string $methodArguments ): mixed;

    /**
     * @param string $resourcesArgument
     * @return mixed
     */
    public static function getResourcesPath( string $resourcesArgument ): mixed;

    /**
     * @param string $eventArgument
     * @return mixed
     */
    public static function getEventPath( string $eventArgument ): mixed;

    /**
     * @param string $jobsArgument
     * @return mixed
     */
    public static function getJobsPath( string $jobsArgument ): mixed;

    /**
     * @param string $listenerArgument
     * @return mixed
     */
    public static function getListenerPath( string $listenerArgument ): mixed;
}
