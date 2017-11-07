<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3d6480a69a1f7ee07170ce8c0de343fbb0d2186fce2a8edd6c0151c1cbcf8114 extends Twig_Template
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
        $__internal_0da0849a9d6ba17f73613caddcff1261fecb492aaf2437cf2cc1febc1ed3d67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da0849a9d6ba17f73613caddcff1261fecb492aaf2437cf2cc1febc1ed3d67e->enter($__internal_0da0849a9d6ba17f73613caddcff1261fecb492aaf2437cf2cc1febc1ed3d67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3c42fc09bdf74be952101a0093e5545ad0c9fd860d7a0058b38e4c657aa5299d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c42fc09bdf74be952101a0093e5545ad0c9fd860d7a0058b38e4c657aa5299d->enter($__internal_3c42fc09bdf74be952101a0093e5545ad0c9fd860d7a0058b38e4c657aa5299d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0da0849a9d6ba17f73613caddcff1261fecb492aaf2437cf2cc1febc1ed3d67e->leave($__internal_0da0849a9d6ba17f73613caddcff1261fecb492aaf2437cf2cc1febc1ed3d67e_prof);

        
        $__internal_3c42fc09bdf74be952101a0093e5545ad0c9fd860d7a0058b38e4c657aa5299d->leave($__internal_3c42fc09bdf74be952101a0093e5545ad0c9fd860d7a0058b38e4c657aa5299d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
