<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Weapon> $weapons
 */
?>
<div class="weapons index content">
    <?= $this->Html->link(__('New Weapon'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Weapons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('firemode') ?></th>
                    <th><?= $this->Paginator->sort('damage') ?></th>
                    <th><?= $this->Paginator->sort('rate_of_fire') ?></th>
                    <th><?= $this->Paginator->sort('mobility') ?></th>
                    <th><?= $this->Paginator->sort('mag_size') ?></th>
                    <th><?= $this->Paginator->sort('reload_time_emp') ?></th>
                    <th><?= $this->Paginator->sort('reload_time_tac') ?></th>
                    <th><?= $this->Paginator->sort('ads_time') ?></th>
                    <th><?= $this->Paginator->sort('ammo_type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($weapons as $weapon): ?>
                <tr>
                    <td><?= $this->Number->format($weapon->id) ?></td>
                    <td><?= h($weapon->name) ?></td>
                    <td><?= $this->Number->format($weapon->type) ?></td>
                    <td><?= $this->Number->format($weapon->firemode) ?></td>
                    <td><?= $this->Number->format($weapon->damage) ?></td>
                    <td><?= $this->Number->format($weapon->rate_of_fire) ?></td>
                    <td><?= $this->Number->format($weapon->mobility) ?></td>
                    <td><?= $this->Number->format($weapon->mag_size) ?></td>
                    <td><?= $this->Number->format($weapon->reload_time_emp) ?></td>
                    <td><?= $this->Number->format($weapon->reload_time_tac) ?></td>
                    <td><?= $this->Number->format($weapon->ads_time) ?></td>
                    <td><?= h($weapon->ammo_type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $weapon->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $weapon->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $weapon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weapon->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
