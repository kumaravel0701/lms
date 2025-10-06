<?php

class __Mustache_2cd8759bc17f4679c4c193acf138dcf1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="categoryroot"
';
        $buffer .= $indent . '    class="editing col-11 col-md-12 mt-3 pl-0';
        $value = $context->find('showdescriptions');
        $buffer .= $this->section12d2d0e4d072750bc84f740e57d6630d($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $value = $context->find('categoriesrendered');
        $buffer .= $this->sectionBfc394dea1e3bc6590a75e146f719124($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section015321f3f7e45118623a87cbeb4b0781($context, $indent, $value);

        return $buffer;
    }

    private function section12d2d0e4d072750bc84f740e57d6630d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showdescriptions';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showdescriptions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section419c69e34b6b7d1f83105eebe97bd1c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> qbank_managecategories/category }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('qbank_managecategories/category')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfc394dea1e3bc6590a75e146f719124(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3 class="context-heading">{{heading}}</h3>
        <div class="box py-3 boxwidthwide boxaligncenter generalbox questioncategories {{ctxlvl}}">
            <ul class="qbank_managecategories-categorylist"
                data-contextid="{{contextid}}" data-contextname="{{contextname}}" data-categoryid="{{categoryid}}">
                {{#items}}
                    {{> qbank_managecategories/category }}
                {{/items}}
            </ul>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h3 class="context-heading">';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <div class="box py-3 boxwidthwide boxaligncenter generalbox questioncategories ';
                $value = $this->resolveValue($context->find('ctxlvl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <ul class="qbank_managecategories-categorylist"
';
                $buffer .= $indent . '                data-contextid="';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-contextname="';
                $value = $this->resolveValue($context->find('contextname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('items');
                $buffer .= $this->section419c69e34b6b7d1f83105eebe97bd1c1($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section015321f3f7e45118623a87cbeb4b0781(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'qbank_managecategories/categoryroot\'], (categoryroot) => {
        categoryroot.init(\'#categoryroot\');
    });
    require([\'qbank_managecategories/categorylist\'], (categorylist) => {
        // Initialise top-level lists.
        const categoryLists = document.querySelectorAll(\'.qbank_managecategories-categorylist[data-contextid]\');
        categoryLists.forEach(element => {
            categorylist.init(`.qbank_managecategories-categorylist[data-categoryid="${element.dataset.categoryid}"]`);
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'qbank_managecategories/categoryroot\'], (categoryroot) => {
';
                $buffer .= $indent . '        categoryroot.init(\'#categoryroot\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    require([\'qbank_managecategories/categorylist\'], (categorylist) => {
';
                $buffer .= $indent . '        // Initialise top-level lists.
';
                $buffer .= $indent . '        const categoryLists = document.querySelectorAll(\'.qbank_managecategories-categorylist[data-contextid]\');
';
                $buffer .= $indent . '        categoryLists.forEach(element => {
';
                $buffer .= $indent . '            categorylist.init(`.qbank_managecategories-categorylist[data-categoryid="${element.dataset.categoryid}"]`);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
