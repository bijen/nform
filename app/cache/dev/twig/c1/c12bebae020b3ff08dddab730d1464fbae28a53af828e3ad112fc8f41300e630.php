<?php

/* NFIntegrationnformBundle:Default:index.html.twig */
class __TwigTemplate_b21e0c442c0c06ce7132fae314565ca033a73b26810fdb08cb1d426699c026c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello bijen !
";
    }

    public function getTemplateName()
    {
        return "NFIntegrationnformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello bijen !
", "NFIntegrationnformBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/bijen/src/NFIntegration/nformBundle/Resources/views/Default/index.html.twig");
    }
}
