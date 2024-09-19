<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Weapon $weapon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Weapon'), ['action' => 'edit', $weapon->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Weapon'), ['action' => 'delete', $weapon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weapon->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Weapons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Weapon'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="weapons view content">
            <h3><?= h($weapon->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($weapon->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ammo Type') ?></th>
                    <td><?= h($weapon->ammo_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($weapon->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $this->Number->format($weapon->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Firemode') ?></th>
                    <td><?= $this->Number->format($weapon->firemode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Damage') ?></th>
                    <td><?= $this->Number->format($weapon->damage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rate Of Fire') ?></th>
                    <td><?= $this->Number->format($weapon->rate_of_fire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobility') ?></th>
                    <td><?= $this->Number->format($weapon->mobility) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mag Size') ?></th>
                    <td><?= $this->Number->format($weapon->mag_size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reload Time Emp') ?></th>
                    <td><?= $this->Number->format($weapon->reload_time_emp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reload Time Tac') ?></th>
                    <td><?= $this->Number->format($weapon->reload_time_tac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ads Time') ?></th>
                    <td><?= $this->Number->format($weapon->ads_time) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Operators') ?></h4>
                <?php if (!empty($weapon->operators)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Side') ?></th>
                            <th><?= __('Health') ?></th>
                            <th><?= __('Speed') ?></th>
                            <th><?= __('Difficulty') ?></th>
                            <th><?= __('Ability') ?></th>
                            <th><?= __('Biography') ?></th>
                            <th><?= __('Real Name') ?></th>
                            <th><?= __('Birthday') ?></th>
                            <th><?= __('Place Birth') ?></th>
                            <th><?= __('Psychological Report') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($weapon->operators as $operator) : ?>
                        <tr>
                            <td><?= h($operator->id) ?></td>
                            <td><?= h($operator->name) ?></td>
                            <td><?= h($operator->side) ?></td>
                            <td><?= h($operator->health) ?></td>
                            <td><?= h($operator->speed) ?></td>
                            <td><?= h($operator->difficulty) ?></td>
                            <td><?= h($operator->ability) ?></td>
                            <td><?= h($operator->biography) ?></td>
                            <td><?= h($operator->real_name) ?></td>
                            <td><?= h($operator->birthday) ?></td>
                            <td><?= h($operator->place_birth) ?></td>
                            <td><?= h($operator->psychological_report) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Operators', 'action' => 'view', $operator->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Operators', 'action' => 'edit', $operator->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Operators', 'action' => 'delete', $operator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operator->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
