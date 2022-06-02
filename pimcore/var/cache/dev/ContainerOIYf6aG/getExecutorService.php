<?php

namespace ContainerOIYf6aG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExecutorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Maintenance\Executor' shared autowired service.
     *
     * @return \Pimcore\Maintenance\Executor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/ExecutorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Executor.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/TaskInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/ScheduledTasksTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/LogMailMaintenanceTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/LogCleanupTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/LogErrorCleanupTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/LogArchiveTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/CleanupBrickTablesTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/CleanupClassificationstoreTablesTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/CleanupFieldcollectionTablesTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/VersionsCleanupTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/VersionsCleanupStackTraceDbTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/RedirectCleanupTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/DbCleanupBrokenViewsTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/TmpStoreCleanupTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/HousekeepingTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/LowQualityImagePreviewTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/StaticPagesGenerationTask.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Maintenance/Tasks/FullTextIndexOptimizeTask.php';

        $a = ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService());
        $b = ($container->services['Symfony\\Component\\Lock\\LockFactory'] ?? $container->getLockFactoryService());

        $container->privates['Pimcore\\Maintenance\\Executor'] = $instance = new \Pimcore\Maintenance\Executor('maintenance.pid', $a, $b, ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService()));

        $c = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());
        $d = ($container->services['Pimcore\\Config'] ?? ($container->services['Pimcore\\Config'] = new \Pimcore\Config()));

        $instance->registerTask('scheduledtasks', new \Pimcore\Maintenance\Tasks\ScheduledTasksTask($a));
        $instance->registerTask('logmaintenance', new \Pimcore\Maintenance\Tasks\LogMailMaintenanceTask($c, $d));
        $instance->registerTask('cleanuplogfiles', new \Pimcore\Maintenance\Tasks\LogCleanupTask());
        $instance->registerTask('httperrorlog', new \Pimcore\Maintenance\Tasks\LogErrorCleanupTask($c));
        $instance->registerTask('archiveLogEntries', new \Pimcore\Maintenance\Tasks\LogArchiveTask($c, $d, $a, $b));
        $instance->registerTask('cleanupBrickTables', new \Pimcore\Maintenance\Tasks\CleanupBrickTablesTask($a));
        $instance->registerTask('cleanupClassificationstoreTables', new \Pimcore\Maintenance\Tasks\CleanupClassificationstoreTablesTask($a));
        $instance->registerTask('cleanupFieldcollectionTables', new \Pimcore\Maintenance\Tasks\CleanupFieldcollectionTablesTask($a));
        $instance->registerTask('versioncleanup', new \Pimcore\Maintenance\Tasks\VersionsCleanupTask($a, $d));
        $instance->registerTask('VersionsCleanupStackTraceDb', new \Pimcore\Maintenance\Tasks\VersionsCleanupStackTraceDbTask($a));
        $instance->registerTask('redirectcleanup', new \Pimcore\Maintenance\Tasks\RedirectCleanupTask($a));
        $instance->registerTask('cleanupbrokenviews', new \Pimcore\Maintenance\Tasks\DbCleanupBrokenViewsTask($c, $a));
        $instance->registerTask('tmpstorecleanup', new \Pimcore\Maintenance\Tasks\TmpStoreCleanupTask($c));
        $instance->registerTask('housekeeping', new \Pimcore\Maintenance\Tasks\HousekeepingTask(7776000, 1800));
        $instance->registerTask('low_quality_image_preview', new \Pimcore\Maintenance\Tasks\LowQualityImagePreviewTask($a, $b));
        $instance->registerTask('documents_static_page_generate', new \Pimcore\Maintenance\Tasks\StaticPagesGenerationTask(($container->services['Pimcore\\Document\\StaticPageGenerator'] ?? $container->getStaticPageGeneratorService()), $a));
        $instance->registerTask('optimize_fulltext_indexes', new \Pimcore\Maintenance\Tasks\FullTextIndexOptimizeTask($b));

        return $instance;
    }
}
