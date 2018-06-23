<?php

/* C:\OSPanel\domains\octobercms/themes/demo/layouts/fallback.htm */
class __TwigTemplate_55dc5da6dc8cc77e0f9ea8cc153e76f6025bfd6463655069679b769df46e34f5 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\OSPanel\\domains\\octobercms/themes/demo/layouts/fallback.htm", "");
    }
}
