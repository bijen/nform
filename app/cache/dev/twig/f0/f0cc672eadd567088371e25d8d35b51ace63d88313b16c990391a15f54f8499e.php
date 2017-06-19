<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_7860c0e5f90868335f6135b1b7ed44309e140403ccfe41be5d9c0f63c794e38b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . ($context["name"] ?? $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_secured_hello_admin", array("name" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  41 => 6,  38 => 5,  32 => 3,  28 => 1,  26 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AcmeDemoBundle:Secured:layout.html.twig\" %}

{% block title \"Hello \" ~ name %}

{% block content %}
    <h1 class=\"title\">Hello {{ name }}!</h1>

    <a href=\"{{ path('_demo_secured_hello_admin', { 'name': name }) }}\">Hello resource secured for <strong>admin</strong> only.</a>
{% endblock %}

{% set code = code(_self) %}
", "AcmeDemoBundle:Secured:hello.html.twig", "/Applications/MAMP/htdocs/bijen/src/Acme/DemoBundle/Resources/views/Secured/hello.html.twig");
    }
}
