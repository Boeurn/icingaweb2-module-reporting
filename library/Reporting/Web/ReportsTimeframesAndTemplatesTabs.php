<?php
// Icinga Reporting | (c) 2019 Icinga GmbH | GPLv2

namespace Icinga\Module\Reporting\Web;

trait ReportsTimeframesAndTemplatesTabs // Downtimes ergänzen
{
    /**
     * Create tabs
     *
     * @return  \Icinga\Web\Widget\Tabs
     */
    public function createTabs()
    {
        $tabs = $this->getTabs();

        $tabs->add('reports', [
                'title'     => $this->translate('Show reports'),
                'label'     => $this->translate('Reports'),
                'url'       => 'reporting/reports'
        ]);

        $tabs->add('timeframes', [
            'title'     => $this->translate('Show time frames'),
            'label'     => $this->translate('Time Frames'),
            'url'       => 'reporting/timeframes'
        ]);

        $tabs->add('templates', [
            'title'     => $this->translate('Show templates'),
            'label'     => $this->translate('Templates'),
            'url'       => 'reporting/templates'
        ]);

        $tabs->add('downtimes', [
            'title'     => $this->translate('Show downtimes'),
            'label'     => $this->translate('Fake Downtimes'),
            'url'       => 'reporting/downtimes'
        ]);

        return $tabs;
    }
}