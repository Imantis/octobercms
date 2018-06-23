<?php

/* C:\OSPanel\domains\octobercms/themes/demo/pages/blog-category.htm */
class __TwigTemplate_e41dc76881a3245ad5511b2447bae88dcd9fe95e73abc1a68a038657fa22f7a8 extends Twig_Template
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
        echo "<div class=\"rov\">
    <div class=\"col-sm-8\"> 
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
</div>
  
<div class=\"rov\">
    <div class=\"col-sm-4\">
        ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "    </div>
</div>s";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/themes/demo/pages/blog-category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rov\">
    <div class=\"col-sm-8\"> 
        {% component 'blogPosts' %}
    </div>
</div>
  
<div class=\"rov\">
    <div class=\"col-sm-4\">
        {% component 'blogCategories' %}
    </div>
</div>s", "C:\\OSPanel\\domains\\octobercms/themes/demo/pages/blog-category.htm", "");
    }
}
