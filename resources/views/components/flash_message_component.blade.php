<div id="fmc-message-wrapper" class="flash_message_component-wrapper fmc-border fmc-{{ strtolower($messageType) }}-border">
    @if ($canClose)
        <div class="flash_message_component-close-tab-btn">x</div>
    @endif
    <div class="flash_message_component-card-wrapper">
        <div class="flash_message_component-heading-block fmc-{{ strtolower($messageType) }}-border">
            <div class="flash_message_component-logo-wrapper">
                <img src="{{ asset("img/icons/$messageType.png") }}" alt="flash message icon">
            </div>
            <p class="flash_message_component-tittle fmc-{{ strtolower($messageType) }}-text">
                @switch( strtolower($messageType) )
                    @case('error') ERROR @break
                    @case('warning') WARNING @break
                    @case('info') INFOR @break
                    @default SUCCESS @break
                @endswitch
            </p>
        </div>
        <div class="flash_message_component-footer-block">
            <p class="flash_message_compoent-message-info">{{ strtoupper($message) }}</p>
        </div>
    </div>
</div>
