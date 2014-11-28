﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace UglyLauncher
{
    public partial class frm_console : Form
    {
        public frm_console()
        {
            InitializeComponent();
        }

        public void addline(string line,Color color)
        {
            try
            {
                txt_console.BeginInvoke(
                    new Action(() =>
                    {
                        txt_console.SelectionColor = color;
                        txt_console.AppendText(line + "\n");
                        txt_console.ScrollToCaret();
                    }
                ));
            }
            catch (Exception)
            {
            }
            
        }

        public void clearcon()
        {
            txt_console.Clear();
        }

        private void btn_close_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void txt_console_TextChanged(object sender, EventArgs e)
        {
            if (txt_console.Lines.Length > 500)
            {
                
            }
        }
    }
}
