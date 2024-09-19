<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operator $operator
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Operator'), ['action' => 'edit', $operator->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Operator'), ['action' => 'delete', $operator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operator->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Operators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Operator'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="operators view content">
            <h3><?= h($operator->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($operator->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Real Name') ?></th>
                    <td><?= h($operator->real_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Place Birth') ?></th>
                    <td><?= h($operator->place_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($operator->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Side') ?></th>
                    <td><?= $this->Number->format($operator->side) ?></td>
                </tr>
                <tr>
                    <th><?= __('Health') ?></th>
                    <td><?= $this->Number->format($operator->health) ?></td>
                </tr>
                <tr>
                    <th><?= __('Speed') ?></th>
                    <td><?= $this->Number->format($operator->speed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Difficulty') ?></th>
                    <td><?= $this->Number->format($operator->difficulty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ability') ?></th>
                    <td><?= $this->Number->format($operator->ability) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= h($operator->birthday) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Biography') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($operator->biography)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Psychological Report') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($operator->psychological_report)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
