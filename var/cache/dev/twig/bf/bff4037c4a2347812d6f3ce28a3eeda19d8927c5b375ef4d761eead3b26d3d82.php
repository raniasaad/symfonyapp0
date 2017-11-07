<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_99c783a1e9012162a0c4fab1dd51d7d7ee3e8495080c0ba8ba0f742f7f311aa6 extends Twig_Template
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
        $__internal_a647a01534b91a345b51acb13aa58549bbf4d922f3d62a87adf1b0fe3e545f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a647a01534b91a345b51acb13aa58549bbf4d922f3d62a87adf1b0fe3e545f15->enter($__internal_a647a01534b91a345b51acb13aa58549bbf4d922f3d62a87adf1b0fe3e545f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0f42156b1acb7c8a117349863eb19b213231134dba970a11a5a20d29b2239404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f42156b1acb7c8a117349863eb19b213231134dba970a11a5a20d29b2239404->enter($__internal_0f42156b1acb7c8a117349863eb19b213231134dba970a11a5a20d29b2239404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_a647a01534b91a345b51acb13aa58549bbf4d922f3d62a87adf1b0fe3e545f15->leave($__internal_a647a01534b91a345b51acb13aa58549bbf4d922f3d62a87adf1b0fe3e545f15_prof);

        
        $__internal_0f42156b1acb7c8a117349863eb19b213231134dba970a11a5a20d29b2239404->leave($__internal_0f42156b1acb7c8a117349863eb19b213231134dba970a11a5a20d29b2239404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
