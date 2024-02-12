<?php

namespace App\Actions\GetModulePathAction;

use App\Design\Interfaces\IModulePath;
use Illuminate\Support\Str;
class GetModulePath  implements IModulePath
{
    /**
     * @param string $angularArgument
     * @return string
     */
    public static function getAngularPath( string $angularArgument ): string
    {
        $angularComponent = Str::studly(class_basename($angularArgument));
        return base_path('Modules/' . str_replace('\\', '/', $angularComponent) . "/View/" . "Angular/{$angularComponent}.ts");
    }

    /**
     * @param string $reactArgument
     * @return string
     */
    public static function getReactPath( string $reactArgument ): string
    {
        $reactComponent = Str::studly(class_basename($reactArgument));
        return base_path('Modules/'. str_replace('\\', '/', $reactComponent) . "/View/"  .  "React/{$reactComponent}.jsx");
    }

    /**
     * @param string $vueArgument
     * @return string
     */
    public static function getVuePath( string $vueArgument ): string
    {
        $vueComponent = Str::studly(class_basename($vueArgument));
        return base_path('Modules/' . str_replace('\\', '/', $vueComponent) . "/View/" . "Vue/{$vueComponent}.vue");
    }

    /**
     * @param string $storeRequestArgument
     * @return string
     */
    public static function getStoreRequestPath( string $storeRequestArgument ): string
    {
        $storeRequestComponent = Str::studly(class_basename($storeRequestArgument));
        return base_path('Modules/' . str_replace('\\', '/', $storeRequestComponent) . "/Request/" . "Store{$storeRequestComponent}Request.php");
    }

    /**
     * @param string $updateRequestArgument
     * @return string
     */
    public static function getUpdateRequestPath( string $updateRequestArgument ): string
    {
        $updateRequestComponent = Str::studly(class_basename($updateRequestArgument));
        return base_path('Modules/' . str_replace('\\', '/', $updateRequestComponent) . "/Request/" . "Update{$updateRequestComponent}Request.php");
    }

    /**
     * @param string $controllerArgument
     * @return string
     */
    public static function getControllerPath( string $controllerArgument ): string
    {
        $controllerComponent = Str::studly(class_basename($controllerArgument));
        return base_path('Modules/' . str_replace('\\', '/', $controllerComponent) . "/Controller/" . "{$controllerComponent}Controller.php");
    }

    /**
     * @param string $modelArgument
     * @return string
     */
    public static function getModelPath( string $modelArgument ): string
    {
        $modelComponent = Str::studly(class_basename($modelArgument));
        return base_path('Modules/' . str_replace('\\', '/', $modelComponent) . "/Model/" . "{$modelComponent}.php");
    }

    /**
     * @param string $serviceArgument
     * @return string
     */
    public static function getServicePath( string $serviceArgument ): string
    {
        $serviceComponent = Str::studly(class_basename($serviceArgument));
        return base_path('Modules/' . str_replace('\\', '/', $serviceComponent) . "/Service/" . "{$serviceComponent}Service.php");
    }

    /**
     * @param string $repositoryArgument
     * @return string
     */
    public static function getRepositoryPath( string $repositoryArgument ): string
    {
        $repositoryComponent = Str::studly(class_basename($repositoryArgument));
        return base_path('Modules/' . str_replace('\\', '/', $repositoryComponent) . "/Repository/" . "{$repositoryComponent}Repository.php");
    }

    /**
     * @param string $testArgument
     * @param string $testTypes
     * @param string $methodArguments
     * @return string
     */
    public static function getTestPath( string $testArgument, string $testTypes, mixed $methodArguments): string
    {
        $testComponent = Str::studly(class_basename($testArgument));
        return base_path("Modules/{$testComponent}/Test/get{$testTypes}RequestTest.php");
    }

    /**
     * @param string $resourcesArgument
     * @return string
     */
    public static function getResourcesPath( string $resourcesArgument ): string
    {
        $resourcesComponent = Str::studly(class_basename($resourcesArgument));
        return base_path('Modules/' . str_replace('\\', '/', $resourcesComponent) . "/Resources/" . "{$resourcesComponent}Resource.php");
    }

    /**
     * @param string $eventArgument
     * @return string
     */
    public static function getEventPath( string $eventArgument ): string
    {
        $eventComponent = Str::studly(class_basename($eventArgument));
        return base_path('Modules/' . str_replace('\\' , '/', $eventComponent) . "/Event/" . "{$eventComponent}Event.php");
    }

    /**
     * @param string $jobsArgument
     * @return string
     */
    public static function getJobsPath(string $jobsArgument ): string
    {
        $jobsComponent = Str::studly(class_basename($jobsArgument));
        return base_path('Modules/' . str_replace('\\', '/', $jobsComponent) . "/Jobs/" . "{$jobsComponent}Job.php");
    }

    /**
     * @param string $listenerArgument
     * @return string
     */
    public static function getListenerPath( string $listenerArgument ): string
    {
        $listenerComponent = Str::studly(class_basename($listenerArgument));
        return base_path('Modules/' . str_replace('\\', '/', $listenerComponent) . "/Listener/" . "{$listenerComponent}Listener.php");
    }
}
