<?php

/* C:\OSPanel\domains\octobercms/plugins/rainlab/user/components/account/activation_check.htm */
class __TwigTemplate_bc79752c6f349ca9b1350e8b7bf50e19ed740f3bd47455857f39ea78f4a47177 extends Twig_Template
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_activated", array())) {
            // line 2
            echo "
    <h3>Your email address has not yet been verified.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octobercms/plugins/rainlab/user/components/account/activation_check.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user.is_activated %}

    <h3>Your email address has not yet been verified.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

{% endif %}", "C:\\OSPanel\\domains\\octobercms/plugins/rainlab/user/components/account/activation_check.htm", "");
    }
}
