<?php

/* C:\OSPanel\domains\octobercms/plugins/acme/stdemo/components/sttodo/default.htm */
class __TwigTemplate_f4727c38618f006ffc2b8923022037dbfc8486fe08a00ffd4c5b73e463745839 extends Twig_Template
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
        $context["tasks"] = twig_get_attribute($this->env, $this->source, ($context["stTodoList"] ?? null), "tasks", array());
        // line 2
        echo "<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 4
            echo "    <li>
        ";
            // line 5
            echo twig_escape_filter($this->env, $context["task"], "html", null, true);
            echo "
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
<h1>Task assigned to: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "name", array()), "html", null, true);
        echo " </h1>
";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/plugins/acme/stdemo/components/sttodo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  44 => 8,  35 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tasks = stTodoList.tasks %}
<ul>
    {% for task in tasks %}
    <li>
        {{task}}
    </li>
    {% endfor %}
</ul>
<h1>Task assigned to: {{__SELF__.name}} </h1>
", "C:\\OSPanel\\domains\\octobercms/plugins/acme/stdemo/components/sttodo/default.htm", "");
    }
}
