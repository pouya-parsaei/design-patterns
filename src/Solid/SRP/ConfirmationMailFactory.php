<?php

namespace Src\Solid\SRP;

class ConfirmationMailFactory
{
    public function __construct(
        private TemplatingEngineInterface $templating,
        private TranslatorInterface       $translator,
    )
    {
    }

    public function createMessageFor(User $user): Message
    {
        $subject = $this->translator->translate('please confirm email address');
        $body = $this->templating->render('email.confirm', [
            'confirm_code' => $user->getConfirmCode(),
        ]);

        return new Message($subject, $body, $user->getEmailAddress());
    }
}
