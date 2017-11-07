<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_dbd90e2f26ec7279a52869efb3b880020edc699c2428084699c89a96bd1fcfc3 extends Twig_Template
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
        $__internal_adb7a56b349eb093ca3ed489123cc64aedd3fc4747d223fc3a7975d59e45ab7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb7a56b349eb093ca3ed489123cc64aedd3fc4747d223fc3a7975d59e45ab7b->enter($__internal_adb7a56b349eb093ca3ed489123cc64aedd3fc4747d223fc3a7975d59e45ab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_bf7e610901ebe482039a2d6add0c9909956132045dd30fc5ad093c1e3e139318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7e610901ebe482039a2d6add0c9909956132045dd30fc5ad093c1e3e139318->enter($__internal_bf7e610901ebe482039a2d6add0c9909956132045dd30fc5ad093c1e3e139318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_adb7a56b349eb093ca3ed489123cc64aedd3fc4747d223fc3a7975d59e45ab7b->leave($__internal_adb7a56b349eb093ca3ed489123cc64aedd3fc4747d223fc3a7975d59e45ab7b_prof);

        
        $__internal_bf7e610901ebe482039a2d6add0c9909956132045dd30fc5ad093c1e3e139318->leave($__internal_bf7e610901ebe482039a2d6add0c9909956132045dd30fc5ad093c1e3e139318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
