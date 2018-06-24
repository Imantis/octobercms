<?php

/* C:\OSPanel\domains\octobercms/themes/demo/layouts/stacic-layout.htm */
class __TwigTemplate_8f5180c50619981c96cf5dfd6750506ab57d395c0e3269261d2c04662b454b13 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 
        <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
 
        <!-- Bootstrap core CSS -->
        <link 
            rel=\"stylesheet\" 
            href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
 
        <!-- Theme CSS -->
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    </head>
 
    <body>
        <div class=\"container\">
            <!-- Static navbar -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" 
                                data-toggle=\"collapse\" 
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Static Pages Demo</a>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        ";
        // line 36
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["topMenuLeft"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "nav navbar-nav"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "                        ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["topMenuRight"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "nav navbar-nav navbar-right"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "                    </div>
                </div><!--/.container-fluid -->
            </div>
        </div> <!-- /container -->
 
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <!-- 
                        We will place the page contents here
                    -->
                    ";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 50
        echo "                </div>
 
                <div class=\"col-sm-3 col-sm-offset-1\">
                    <div class=\"sidebar\">
                            <!--  The blog category list will be displayed here  -->
                               <h4>Blog categories</h4>
                               ";
        // line 56
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["blogCategoriesMenu"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "nav nav-pills nav-stacked"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "                      </div>
                </div>
            </div>
        </div>
 
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/themes/demo/layouts/stacic-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 57,  102 => 56,  94 => 50,  92 => 49,  79 => 38,  72 => 37,  66 => 36,  43 => 16,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 
        <title>{{ this.page.title }}</title>
 
        <!-- Bootstrap core CSS -->
        <link 
            rel=\"stylesheet\" 
            href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
 
        <!-- Theme CSS -->
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    </head>
 
    <body>
        <div class=\"container\">
            <!-- Static navbar -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" 
                                data-toggle=\"collapse\" 
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Static Pages Demo</a>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        {% partial 'menu-items' items=topMenuLeft.menuItems class='nav navbar-nav' %}
                        {% partial 'menu-items' items=topMenuRight.menuItems class='nav navbar-nav navbar-right' %}
                    </div>
                </div><!--/.container-fluid -->
            </div>
        </div> <!-- /container -->
 
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <!-- 
                        We will place the page contents here
                    -->
                    {% page %}
                </div>
 
                <div class=\"col-sm-3 col-sm-offset-1\">
                    <div class=\"sidebar\">
                            <!--  The blog category list will be displayed here  -->
                               <h4>Blog categories</h4>
                               {% partial 'menu-items' items=blogCategoriesMenu.menuItems class='nav nav-pills nav-stacked' %}
                      </div>
                </div>
            </div>
        </div>
 
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </body>
</html>", "C:\\OSPanel\\domains\\octobercms/themes/demo/layouts/stacic-layout.htm", "");
    }
}
