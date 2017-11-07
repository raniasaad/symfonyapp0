<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_14c1eca86c8a3c47fdc300b045efac78e80921d6e9d640997cac1bfe67b95683 extends Twig_Template
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
        $__internal_8bf36072526c20b033bf169cf87c45c012d9253b14bec0ee7049cc0569496e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf36072526c20b033bf169cf87c45c012d9253b14bec0ee7049cc0569496e51->enter($__internal_8bf36072526c20b033bf169cf87c45c012d9253b14bec0ee7049cc0569496e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_2b7ec368ba5e7af1818184856b40d245f85dfb9fb5edb64a73b1877abb5b3920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7ec368ba5e7af1818184856b40d245f85dfb9fb5edb64a73b1877abb5b3920->enter($__internal_2b7ec368ba5e7af1818184856b40d245f85dfb9fb5edb64a73b1877abb5b3920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8bf36072526c20b033bf169cf87c45c012d9253b14bec0ee7049cc0569496e51->leave($__internal_8bf36072526c20b033bf169cf87c45c012d9253b14bec0ee7049cc0569496e51_prof);

        
        $__internal_2b7ec368ba5e7af1818184856b40d245f85dfb9fb5edb64a73b1877abb5b3920->leave($__internal_2b7ec368ba5e7af1818184856b40d245f85dfb9fb5edb64a73b1877abb5b3920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
