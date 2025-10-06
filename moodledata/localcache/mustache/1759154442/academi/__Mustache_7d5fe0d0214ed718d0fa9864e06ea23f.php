<?php

class __Mustache_7d5fe0d0214ed718d0fa9864e06ea23f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="qbank_managecategories-item';
        $value = $context->find('draghandle');
        $buffer .= $this->section7428d5ae0c23600cd626ca680f7b064e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    id="category-';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-categoryname="';
        $value = $this->resolveValue($context->find('categoryname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-parent="';
        $value = $this->resolveValue($context->find('parent'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-sortorder="';
        $value = $this->resolveValue($context->find('sortorder'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="container';
        $value = $context->find('haschildren');
        $buffer .= $this->section592e097d8d84f2c3ea9869e95a434b82($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="row m-0">
';
        $buffer .= $indent . '            <div class="p-2 mr-2 qbank_managecategories-handlecontainer">
';
        $buffer .= $indent . '                <span class="qbank_managecategories-draghandle">
';
        $buffer .= $indent . '                    <i class="fa fa-grip-vertical"></i>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-11 p-0 qbank_managecategories-contentcontainer">
';
        $buffer .= $indent . '                <div class="row m-0">
';
        $buffer .= $indent . '                    <div class="col-11 p-0 pt-1 qbank_managecategories-details">
';
        if ($partial = $this->mustache->loadPartial('qbank_managecategories/category_details')) {
            $buffer .= $partial->renderInternal($context, $indent . '                        ');
        }
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="col-1 qbank_managecategories-actioncontainer">
';
        $value = $context->find('editactionmenu');
        $buffer .= $this->section1b300f7b0d687edc49d977d2ca0f7892($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="row m-0 mt-1 qbank_managecategories-childlistcontainer">
';
        $value = $context->find('haschildren');
        $buffer .= $this->sectionAd54571b33290a71aaa897ca8c03cc7b($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>
';
        $value = $context->find('js');
        $buffer .= $this->section04e1b40f61b18b3cbd66fedee1e89b61($context, $indent, $value);

        return $buffer;
    }

    private function section7428d5ae0c23600cd626ca680f7b064e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' draghandle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' draghandle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section592e097d8d84f2c3ea9869e95a434b82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pb-0';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pb-0';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b300f7b0d687edc49d977d2ca0f7892(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{>core/action_menu}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd54571b33290a71aaa897ca8c03cc7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> qbank_managecategories/childlist }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('qbank_managecategories/childlist')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04e1b40f61b18b3cbd66fedee1e89b61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'qbank_managecategories/category\'], function(component) {
        component.init(\'#category-{{{categoryid}}}\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'qbank_managecategories/category\'], function(component) {
';
                $buffer .= $indent . '        component.init(\'#category-';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
