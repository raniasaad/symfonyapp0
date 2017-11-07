<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9561d4c3af7d2f9ffb32867bc3838c2562bf984be6e1bffc143f4a72c019916a extends Twig_Template
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
        $__internal_f22a848321ee51b842d1a4184a0676a6f09ca63ade9a912b4906056d19573b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22a848321ee51b842d1a4184a0676a6f09ca63ade9a912b4906056d19573b20->enter($__internal_f22a848321ee51b842d1a4184a0676a6f09ca63ade9a912b4906056d19573b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_79fcab0dc6b5ff61c5b582ad783c7fd0c8a9101bc3e85404e0d6db362a041d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fcab0dc6b5ff61c5b582ad783c7fd0c8a9101bc3e85404e0d6db362a041d7d->enter($__internal_79fcab0dc6b5ff61c5b582ad783c7fd0c8a9101bc3e85404e0d6db362a041d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f22a848321ee51b842d1a4184a0676a6f09ca63ade9a912b4906056d19573b20->leave($__internal_f22a848321ee51b842d1a4184a0676a6f09ca63ade9a912b4906056d19573b20_prof);

        
        $__internal_79fcab0dc6b5ff61c5b582ad783c7fd0c8a9101bc3e85404e0d6db362a041d7d->leave($__internal_79fcab0dc6b5ff61c5b582ad783c7fd0c8a9101bc3e85404e0d6db362a041d7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
