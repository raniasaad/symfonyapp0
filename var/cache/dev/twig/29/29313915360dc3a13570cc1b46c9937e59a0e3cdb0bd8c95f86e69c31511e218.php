<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4ef70e332dd2d5a0b4fe6a494ed455062fe762c3af96a3c940366955ea2f61f6 extends Twig_Template
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
        $__internal_ecf693db9b60e0e39ac217a235919275687b3ed3254ccdef4efb562b9c29b87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf693db9b60e0e39ac217a235919275687b3ed3254ccdef4efb562b9c29b87e->enter($__internal_ecf693db9b60e0e39ac217a235919275687b3ed3254ccdef4efb562b9c29b87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0197e6121d0dab0a0ab14acd09462d1e2f76894958a992eccf132a74adeac8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0197e6121d0dab0a0ab14acd09462d1e2f76894958a992eccf132a74adeac8d8->enter($__internal_0197e6121d0dab0a0ab14acd09462d1e2f76894958a992eccf132a74adeac8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ecf693db9b60e0e39ac217a235919275687b3ed3254ccdef4efb562b9c29b87e->leave($__internal_ecf693db9b60e0e39ac217a235919275687b3ed3254ccdef4efb562b9c29b87e_prof);

        
        $__internal_0197e6121d0dab0a0ab14acd09462d1e2f76894958a992eccf132a74adeac8d8->leave($__internal_0197e6121d0dab0a0ab14acd09462d1e2f76894958a992eccf132a74adeac8d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
