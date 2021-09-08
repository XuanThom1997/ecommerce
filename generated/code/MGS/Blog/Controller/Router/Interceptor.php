<?php
namespace MGS\Blog\Controller\Router;

/**
 * Interceptor class for @see \MGS\Blog\Controller\Router
 */
class Interceptor extends \MGS\Blog\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\App\ResponseInterface $response, \Magento\Framework\Event\ManagerInterface $eventManager, \MGS\Blog\Model\Category $categoryCollection, \MGS\Blog\Model\Post $postCollection, \MGS\Blog\Helper\Data $blogHelper, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($actionFactory, $response, $eventManager, $categoryCollection, $postCollection, $blogHelper, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
