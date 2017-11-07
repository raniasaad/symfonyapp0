<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f201cdf592b498c12e41792fe00aa871f3de79d7aa76f9c9288f078c87864df8 extends Twig_Template
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
        $__internal_d6c1492e978892bd2bce349f1fa27219afba9100107fb3959f351b9b74bd3409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c1492e978892bd2bce349f1fa27219afba9100107fb3959f351b9b74bd3409->enter($__internal_d6c1492e978892bd2bce349f1fa27219afba9100107fb3959f351b9b74bd3409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a1058761c5a56abd5b9137a029221ea54a2fc664c7fdfcafac316aa50e0149c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1058761c5a56abd5b9137a029221ea54a2fc664c7fdfcafac316aa50e0149c1->enter($__internal_a1058761c5a56abd5b9137a029221ea54a2fc664c7fdfcafac316aa50e0149c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d6c1492e978892bd2bce349f1fa27219afba9100107fb3959f351b9b74bd3409->leave($__internal_d6c1492e978892bd2bce349f1fa27219afba9100107fb3959f351b9b74bd3409_prof);

        
        $__internal_a1058761c5a56abd5b9137a029221ea54a2fc664c7fdfcafac316aa50e0149c1->leave($__internal_a1058761c5a56abd5b9137a029221ea54a2fc664c7fdfcafac316aa50e0149c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
