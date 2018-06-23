<?php

/* C:\OSPanel\domains\octobercms/themes/demo/pages/st-todo.htm */
class __TwigTemplate_0a6120a40b76789c5e65c846e5c307cbf85167296df3f5f5350cf9f6212f91cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("stTodoList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/themes/demo/pages/st-todo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'stTodoList' %}", "C:\\OSPanel\\domains\\octobercms/themes/demo/pages/st-todo.htm", "");
    }
}
