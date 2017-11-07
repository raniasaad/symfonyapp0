<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4822128f110c79cfa4fc06c797baaf5a1bb88fd6f7ec32a410c8a5f1a13dfa4a extends Twig_Template
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
        $__internal_5599f8e03fa61c800e531e3db83922db6e117ada35ea1d0ddc1bb7241370c3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5599f8e03fa61c800e531e3db83922db6e117ada35ea1d0ddc1bb7241370c3fa->enter($__internal_5599f8e03fa61c800e531e3db83922db6e117ada35ea1d0ddc1bb7241370c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a9ce7b4509e6b998f9218bd09ff0b89e01ed65119c9c6ae2c545b696fc21c6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ce7b4509e6b998f9218bd09ff0b89e01ed65119c9c6ae2c545b696fc21c6a7->enter($__internal_a9ce7b4509e6b998f9218bd09ff0b89e01ed65119c9c6ae2c545b696fc21c6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5599f8e03fa61c800e531e3db83922db6e117ada35ea1d0ddc1bb7241370c3fa->leave($__internal_5599f8e03fa61c800e531e3db83922db6e117ada35ea1d0ddc1bb7241370c3fa_prof);

        
        $__internal_a9ce7b4509e6b998f9218bd09ff0b89e01ed65119c9c6ae2c545b696fc21c6a7->leave($__internal_a9ce7b4509e6b998f9218bd09ff0b89e01ed65119c9c6ae2c545b696fc21c6a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
