<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_4e52719f78efc86c7a7eed1c651dac270d14bfd7a0272dc872f3aeaa2aa28b9a extends Twig_Template
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
        $__internal_e1cf47b150bd8d493be48e1128b4fe3543dbd8ff38be7d1e7aad61cc9d5e00cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cf47b150bd8d493be48e1128b4fe3543dbd8ff38be7d1e7aad61cc9d5e00cc->enter($__internal_e1cf47b150bd8d493be48e1128b4fe3543dbd8ff38be7d1e7aad61cc9d5e00cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b45c2cb5af62b945610e9fc0d8f0c905472d1a569f58f533695de3b03aec9b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45c2cb5af62b945610e9fc0d8f0c905472d1a569f58f533695de3b03aec9b00->enter($__internal_b45c2cb5af62b945610e9fc0d8f0c905472d1a569f58f533695de3b03aec9b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e1cf47b150bd8d493be48e1128b4fe3543dbd8ff38be7d1e7aad61cc9d5e00cc->leave($__internal_e1cf47b150bd8d493be48e1128b4fe3543dbd8ff38be7d1e7aad61cc9d5e00cc_prof);

        
        $__internal_b45c2cb5af62b945610e9fc0d8f0c905472d1a569f58f533695de3b03aec9b00->leave($__internal_b45c2cb5af62b945610e9fc0d8f0c905472d1a569f58f533695de3b03aec9b00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
