<?php

/* C:\OSPanel\domains\octobercms/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_e10cefc7a2300004bb104a3e0c5c9b531af892751f85db2baaf8aa1afabba23b extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", array());
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/plugins/rainlab/pages/components/staticpage/default.htm";
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
        return new Twig_Source("{{ __SELF__.content|raw }}", "C:\\OSPanel\\domains\\octobercms/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
