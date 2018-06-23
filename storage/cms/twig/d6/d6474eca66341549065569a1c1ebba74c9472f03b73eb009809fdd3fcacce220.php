<?php

/* C:\OSPanel\domains\octobercms/themes/demo/pages/blog-post.htm */
class __TwigTemplate_8109fb79162b8bb6da416e24ab205d37ed569a0527c54cccf22e281a29ab6c59 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/themes/demo/pages/blog-post.htm";
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
        return new Twig_Source("{% component 'blogPost' %}", "C:\\OSPanel\\domains\\octobercms/themes/demo/pages/blog-post.htm", "");
    }
}
