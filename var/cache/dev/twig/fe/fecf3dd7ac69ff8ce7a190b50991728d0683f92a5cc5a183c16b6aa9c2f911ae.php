<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2bce84114d955adafb80988aa6e6c11f4b07d5a44754459049f19bbf92a04438 extends Twig_Template
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
        $__internal_61bfa5ac47dc74eead690ec275e29d693ace5453e699a8e3f2dfbd4b75356267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bfa5ac47dc74eead690ec275e29d693ace5453e699a8e3f2dfbd4b75356267->enter($__internal_61bfa5ac47dc74eead690ec275e29d693ace5453e699a8e3f2dfbd4b75356267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_087bdfadef66dcc40c0ad316d491d06b9c21d2d346c3c93196cbf5b179141e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087bdfadef66dcc40c0ad316d491d06b9c21d2d346c3c93196cbf5b179141e54->enter($__internal_087bdfadef66dcc40c0ad316d491d06b9c21d2d346c3c93196cbf5b179141e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_61bfa5ac47dc74eead690ec275e29d693ace5453e699a8e3f2dfbd4b75356267->leave($__internal_61bfa5ac47dc74eead690ec275e29d693ace5453e699a8e3f2dfbd4b75356267_prof);

        
        $__internal_087bdfadef66dcc40c0ad316d491d06b9c21d2d346c3c93196cbf5b179141e54->leave($__internal_087bdfadef66dcc40c0ad316d491d06b9c21d2d346c3c93196cbf5b179141e54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
